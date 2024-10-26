# Start from the official PrestaShop image
FROM prestashop/prestashop:1.7.8

# Set environment variables for PrestaShop
ENV PS_DEV_MODE=1
ENV DB_SERVER=db
ENV DB_NAME=prestashop
ENV DB_USER=root
ENV DB_PASSWORD=root_password

# Expose the default HTTP port for PrestaShop
EXPOSE 80

# Copy custom themes or modules (optional)
# Uncomment and customize these lines if you have additional themes or modules
# COPY themes/my-custom-theme /var/www/html/themes/my-custom-theme
# COPY modules/my-custom-module /var/www/html/modules/my-custom-module

# Command to start Apache in the foreground
CMD ["apache2-foreground"]
