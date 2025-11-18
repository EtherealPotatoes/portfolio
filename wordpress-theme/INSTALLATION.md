# WordPress Theme Installation Guide

## What You Have

Your complete WordPress theme is located in:
```
/wordpress-theme/portfolio-theme/
```

And a compressed archive ready for upload:
```
/wordpress-theme/portfolio-theme.tar.gz
```

## Installation Steps

### Option 1: Direct FTP/File Manager Upload (Recommended)

1. **Access your WordPress installation via FTP or File Manager**
   - Navigate to: `wp-content/themes/`

2. **Upload the theme folder**
   - Upload the entire `portfolio-theme` folder to `wp-content/themes/`
   - Your theme should now be at: `wp-content/themes/portfolio-theme/`

3. **Activate the theme**
   - Go to WordPress Admin → Appearance → Themes
   - Find "Joseph Young Portfolio"
   - Click "Activate"

### Option 2: WordPress Admin Upload

**Note:** WordPress admin upload requires a .zip file, but the server only created a .tar.gz file. You'll need to:

1. Download the `portfolio-theme` folder to your computer
2. Compress it as a .zip file (not .tar.gz)
3. Go to WordPress Admin → Appearance → Themes → Add New
4. Click "Upload Theme"
5. Choose your .zip file
6. Click "Install Now" then "Activate"

## Post-Installation Setup

### 1. Configure Menu (Important!)

Go to **Appearance → Menus**:

1. Create a new menu called "Primary Menu"
2. Add Custom Links for smooth scrolling:
   - Label: "Projects" | URL: `#projects`
   - Label: "Skills" | URL: `#skills`
   - Label: "About" | URL: `#about`
   - Label: "Contact" | URL: `#contact`
3. Assign this menu to "Primary Menu" location
4. Save

### 2. Replace Images

The theme includes placeholder images. Replace them with your actual images:

Navigate to: `wp-content/themes/portfolio-theme/images/`

Replace these files:
- `about-me.jpg` - Your photo or workspace (recommended: 800x800px)
- `bike-frame.jpg` - Bike frame project (recommended: 800x600px)
- `watch-design.jpg` - Watch design (recommended: 800x600px)
- `jet-engine.jpg` - Jet engine (recommended: 800x600px)
- `blackjack-game.jpg` - Blackjack game (recommended: 800x600px)

### 3. Configure Contact Form

The contact form sends emails to your WordPress admin email.

**To set/verify your admin email:**
1. Go to Settings → General
2. Check "Administration Email Address"
3. Update if needed

**To test the contact form:**
1. Fill out the form on your site
2. Check your email inbox (and spam folder)
3. If emails aren't sending, you may need to install a mail plugin like "WP Mail SMTP"

### 4. Set as Homepage (Optional)

To make this the homepage:
1. Go to Settings → Reading
2. Select "Your homepage displays: A static page"
3. Choose "Homepage" or create a new page
4. Since this theme is designed for single-page use, you can skip this

## Customization

### Changing Colors

Edit `wp-content/themes/portfolio-theme/style.css`

Find the `:root` section at the top and modify colors:

```css
:root {
  --color-primary: #2563eb;        /* Change primary blue */
  --color-primary-hover: #1d4ed8;  /* Hover state */
  --color-gray-900: #111827;        /* Dark text */
  /* etc... */
}
```

### Editing Content

All page content is in: `wp-content/themes/portfolio-theme/index.php`

You can edit:
- Your name and bio (Hero section)
- Project details (Projects section)
- Skills and certifications (Skills section)
- About text (About section)
- Contact information (Contact section)
- Social media links (multiple locations)

### Updating Social Links

Search for these URLs in `index.php`, `header.php`, and `footer.php`:
- GitHub: `https://github.com/EtherealPotatoes`
- LinkedIn: `https://linkedin.com/in/joseph-y-6827a0383/`
- Email: `jy139500@gmail.com`

Replace with your actual profiles.

## Pushing to GitHub

If you want to version control your theme:

```bash
cd /path/to/wordpress-theme/portfolio-theme
git init
git add .
git commit -m "Initial WordPress theme"
git remote add origin YOUR_GITHUB_REPO_URL
git push -u origin main
```

## Troubleshooting

### Theme doesn't appear in WordPress
- Check file permissions (folders: 755, files: 644)
- Verify the theme is in `wp-content/themes/portfolio-theme/`
- Ensure `style.css` has proper WordPress headers

### CSS not loading
- Clear browser cache (Ctrl+Shift+R or Cmd+Shift+R)
- Clear WordPress cache if using a caching plugin
- Check theme files are uploaded correctly

### Contact form not sending emails
- Install "WP Mail SMTP" plugin
- Configure SMTP settings
- Test with a simple plugin like "Check Email"

### Images not displaying
- Verify images are in: `wp-content/themes/portfolio-theme/images/`
- Check image file names match exactly (case-sensitive)
- Ensure proper file permissions (644)

### Mobile menu not working
- Clear browser cache
- Check if jQuery is loading (it's included with WordPress)
- Look for JavaScript errors in browser console (F12)

## File Structure

```
portfolio-theme/
├── style.css           # Main stylesheet with theme info
├── functions.php       # Theme functions and setup
├── index.php          # Main template (all content here)
├── header.php         # Header and navigation
├── footer.php         # Footer
├── README.md          # Theme documentation
├── screenshot.txt     # Placeholder for theme screenshot
└── images/            # Project images
    ├── about-me.jpg
    ├── bike-frame.jpg
    ├── watch-design.jpg
    ├── jet-engine.jpg
    └── blackjack-game.jpg
```

## Support

For issues or questions:
- Email: jy139500@gmail.com
- GitHub: https://github.com/EtherealPotatoes

## Next Steps

1. Install and activate the theme
2. Set up the navigation menu
3. Replace placeholder images
4. Test the contact form
5. Customize colors and content as needed
6. Launch your portfolio!

Good luck with your portfolio! 🚀
