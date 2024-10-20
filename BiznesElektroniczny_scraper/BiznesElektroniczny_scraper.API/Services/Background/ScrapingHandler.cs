using BiznesElektroniczny_scraper.API.Services.Scraping;

namespace BiznesElektroniczny_scraper.API.Services.Background;

public class ScrapingHandler(ScrapingService scrapingService) : BackgroundService {
    protected override async Task ExecuteAsync(CancellationToken stoppingToken) => await scrapingService.ScrapeAsync();
}