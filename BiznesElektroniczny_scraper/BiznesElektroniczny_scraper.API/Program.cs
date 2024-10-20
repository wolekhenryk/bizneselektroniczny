using BiznesElektroniczny_scraper.API.Services;
using BiznesElektroniczny_scraper.API.Services.Scraping;
using Hangfire;
using Hangfire.MemoryStorage;
using Serilog;

var builder = WebApplication.CreateBuilder(args);

Log.Logger = new LoggerConfiguration()
    .MinimumLevel.Debug()
    .WriteTo.Console() // Ensure this line now works
    .WriteTo.File("Logs/api.log", rollingInterval: RollingInterval.Day)
    .CreateLogger();

// Add services to the container.

builder.Services.AddControllers();
// Learn more about configuring Swagger/OpenAPI at https://aka.ms/aspnetcore/swashbuckle
builder.Services.AddEndpointsApiExplorer();
builder.Services.AddSwaggerGen();

builder.Services.AddScoped<ProductsRetrieverService>();

builder.Services.AddHttpClient();

builder.Services.AddScoped<ScrapingService>();

builder.Services.AddHangfire(config => config.UseSerilogLogProvider());

// Configure the Hangfire service for background tasks
builder.Services.AddHangfire(configuration => configuration
    .UseSimpleAssemblyNameTypeSerializer()
    .UseRecommendedSerializerSettings()
    .UseMemoryStorage());

// Configure the Hangfire server
builder.Services.AddHangfireServer();

var app = builder.Build();

// Use the dashboard with the default options
app.UseHangfireDashboard();

// Add a recurring job to scrape the website every 24 hours

RecurringJob.AddOrUpdate<ScrapingService>(
    "daily-scraping",
    service => service.ScrapeAsync(), 
    Cron.Daily);

app.UseSwagger();
app.UseSwaggerUI(options => {
    options.SwaggerEndpoint("/swagger/v1/swagger.json", "API");
    options.RoutePrefix = string.Empty;
});


app.UseHttpsRedirection();

app.UseAuthorization();

app.MapControllers();

app.Run();