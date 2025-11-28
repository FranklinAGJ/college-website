# SIWS College Website - InfinityFree Deployment Package

## 📦 Contents
This folder contains all files ready for deployment to InfinityFree hosting.

## 📁 Folder Structure
```
infinityfree-deploy/
└── htdocs/                 # Upload this entire folder's contents to your InfinityFree htdocs directory
    ├── index.php           # Homepage
    ├── .htaccess           # Server configuration
    ├── css/                # Stylesheets
    │   ├── styles.css
    │   └── chatbot.css
    ├── js/                 # JavaScript files
    │   ├── script.js
    │   └── chatbot.js
    ├── images/             # All images
    ├── includes/           # Shared PHP files
    │   ├── header.php
    │   └── footer.php
    └── pages/              # All website pages
        ├── about-us.php
        ├── programs.php
        ├── contact.php
        └── ... (other pages)
```

## 🚀 Deployment Instructions

### Step 1: Access Your InfinityFree Account
1. Log in to your InfinityFree control panel
2. Go to "File Manager" or use an FTP client

### Step 2: Upload Files
**Option A: Using File Manager (Recommended for beginners)**
1. Navigate to the `htdocs` folder in your InfinityFree file manager
2. Delete any default files (like default.php or index.html)
3. Upload ALL contents from the `infinityfree-deploy/htdocs/` folder
4. Make sure the folder structure is preserved

**Option B: Using FTP Client (FileZilla, etc.)**
1. Connect to your InfinityFree hosting via FTP
   - Host: Your FTP hostname (found in control panel)
   - Username: Your FTP username
   - Password: Your FTP password
   - Port: 21
2. Navigate to the `htdocs` folder
3. Upload all contents from `infinityfree-deploy/htdocs/`

### Step 3: Verify Upload
After uploading, your htdocs folder should look like this:
```
htdocs/
├── index.php
├── .htaccess
├── css/
├── js/
├── images/
├── includes/
└── pages/
```

### Step 4: Test Your Website
1. Visit your website URL (e.g., yoursite.infinityfreeapp.com)
2. Test all pages and navigation
3. Check that images load correctly
4. Verify forms work properly

## ⚙️ Configuration Notes

### PHP Settings
- InfinityFree supports PHP 7.4 and 8.x
- The .htaccess file is pre-configured for optimal performance
- Error reporting is disabled for security (enable for debugging if needed)

### Database (if needed in future)
If you add database functionality:
1. Create a MySQL database in InfinityFree control panel
2. Note down: database name, username, password, hostname
3. Create a `config.php` file with database credentials
4. Never commit database credentials to version control

### Custom Domain
To use a custom domain:
1. Go to InfinityFree control panel
2. Navigate to "Addon Domains" or "Parked Domains"
3. Add your domain and update DNS settings

## 🔧 Troubleshooting

### Images Not Loading
- Check that image paths are correct
- Verify images folder was uploaded completely
- Check file permissions (should be 644 for files, 755 for folders)

### Pages Showing 404 Error
- Ensure all PHP files are in the correct folders
- Check that .htaccess file was uploaded
- Verify file names match exactly (case-sensitive)

### Styling Issues
- Clear browser cache
- Check that CSS files are uploaded to css/ folder
- Verify CSS file paths in header.php

### PHP Errors
- Enable error reporting temporarily in .htaccess:
  ```
  php_flag display_errors On
  ```
- Check PHP version compatibility
- Review error logs in InfinityFree control panel

## 📝 Important Notes

1. **File Permissions**: InfinityFree automatically sets correct permissions
2. **Upload Limits**: InfinityFree has file size limits (usually 10MB per file)
3. **Bandwidth**: Monitor your bandwidth usage in control panel
4. **Backups**: Always keep a local backup of your files
5. **SSL Certificate**: InfinityFree provides free SSL - enable it in control panel

## 🔒 Security Recommendations

1. Keep PHP files updated
2. Don't store sensitive data in publicly accessible files
3. Use strong passwords for admin areas (if added later)
4. Regularly backup your website
5. Monitor access logs for suspicious activity

## 📞 Support

- InfinityFree Forum: https://forum.infinityfree.net/
- InfinityFree Knowledge Base: https://infinityfree.net/support/

## ✅ Pre-Deployment Checklist

- [ ] All files uploaded to htdocs folder
- [ ] .htaccess file uploaded
- [ ] Images folder uploaded completely
- [ ] Test homepage loads correctly
- [ ] Test all navigation links
- [ ] Test all pages load without errors
- [ ] Verify images display correctly
- [ ] Check mobile responsiveness
- [ ] Test contact form (if applicable)
- [ ] Enable SSL certificate in control panel

---

**Ready to Deploy!** 🎉

Simply upload the contents of the `htdocs` folder to your InfinityFree hosting and your website will be live!
