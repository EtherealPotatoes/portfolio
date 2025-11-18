# Joseph Young Portfolio WordPress Theme

A modern, professional portfolio theme showcasing engineering projects, skills, and achievements.

## Features

- Fully responsive design
- Clean, modern aesthetic with blue color scheme
- Sections: Hero, Projects, Skills, About, Contact
- Contact form with email functionality
- Smooth scrolling navigation
- Mobile-friendly menu
- SEO optimized
- Fast loading

## Installation

1. Download the `portfolio-theme.zip` file
2. Go to your WordPress admin panel
3. Navigate to Appearance → Themes → Add New
4. Click "Upload Theme" and select the zip file
5. Click "Install Now"
6. Once installed, click "Activate"

## Setup

### Menu Setup
1. Go to Appearance → Menus
2. Create a new menu called "Primary Menu"
3. Add custom links with these URLs:
   - Home: `#hero`
   - Projects: `#projects`
   - Skills: `#skills`
   - About: `#about`
   - Contact: `#contact`
4. Assign the menu to "Primary Menu" location

### Images
Replace the placeholder images in the `images` folder with your actual project images:
- `about-me.jpg` - Your photo or workspace
- `bike-frame.jpg` - Bike frame project
- `watch-design.jpg` - Watch design project
- `jet-engine.jpg` - Jet engine project
- `blackjack-game.jpg` - Blackjack game project

### Contact Form
The contact form sends emails to your WordPress admin email. Make sure your WordPress email settings are configured correctly.

## Customization

### Colors
Edit `style.css` and modify the CSS variables in the `:root` selector to change colors:
```css
:root {
  --color-primary: #2563eb;
  --color-primary-hover: #1d4ed8;
  /* etc... */
}
```

### Content
All content is in `index.php`. Edit this file to:
- Change your name and bio
- Update project details
- Modify skills and certifications
- Update social media links
- Change contact information

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher

## Support

For issues or questions, contact: jy139500@gmail.com

## License

GPL v2 or later

## Credits

Theme developed by Joseph Young
Built with modern web standards and WordPress best practices
