# Phishing Simulation Platform

A Laravel-based web application designed for educational purposes to demonstrate phishing simulation techniques and security awareness training. This platform allows administrators to create realistic phishing pages for major services and collect submitted credentials for analysis.

## 🚨 **Educational Use Only**

**⚠️ IMPORTANT NOTICE:** This application is intended **solely for educational and security awareness training purposes**. It should only be used in authorized environments with explicit consent from all participants. Unauthorized use for malicious purposes is strictly prohibited and may violate laws and regulations.

## 🎯 Features

### Phishing Page Management
- **Multiple Platform Templates**: Pre-built realistic login pages for:
  - Facebook
  - Google
  - Amazon
  - Netflix
- **Dynamic Link Generation**: Generate unique phishing links for each platform
- **Credential Collection**: Securely store submitted email and password combinations
- **Category-based Organization**: Organize phishing attempts by platform type

### Data Management
- **Real-time Dashboard**: View collected credentials in an organized table
- **Advanced Filtering**: Filter records by platform category
- **Search Functionality**: Search through email addresses and passwords
- **Bulk Operations**: Delete individual records with confirmation
- **Data Validation**: Server-side validation for all inputs

### User Interface
- **Responsive Design**: Mobile-friendly interface using Bootstrap 5
- **Modern UI**: Clean, professional dashboard layout
- **Interactive Elements**: Copy-to-clipboard functionality for generated links
- **Success Notifications**: User-friendly feedback messages

## 🛠️ Technical Stack

### Backend
- **Framework**: Laravel 9.x
- **PHP Version**: PHP 8.0+
- **Database**: MySQL/PostgreSQL (configurable)
- **Authentication**: Laravel's built-in auth system

### Frontend
- **CSS Framework**: Bootstrap 5.3
- **JavaScript**: Vanilla JS with modern ES6+ features
- **Build Tool**: Vite
- **Styling**: Custom SCSS with Bootstrap integration

### Key Dependencies
- `laravel/ui`: Authentication scaffolding
- `laravel/sanctum`: API authentication
- `intervention/image`: Image processing
- `spatie/image-optimizer`: Image optimization
- `barryvdh/laravel-debugbar`: Development debugging

## 📋 Prerequisites

- PHP 8.0 or higher
- Composer 2.0 or higher
- Node.js 16.0 or higher
- npm 8.0 or higher
- MySQL 5.7+ or PostgreSQL 9.2+
- Web server (Apache/Nginx)

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/phishing-simulation-platform.git
cd phishing-simulation-platform
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database settings in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=phishing_platform
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Database Setup
```bash
# Run migrations
php artisan migrate

# Seed database (optional)
php artisan db:seed
```

### 5. Build Assets
```bash
# Development build
npm run dev

# Production build
npm run build
```

### 6. Start Development Server
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## 🗄️ Database Structure

### Phishing Model
```php
class Phishing extends Model
{
    protected $fillable = [
        'email',
        'password', 
        'category'
    ];
}
```

### Migration Schema
- `phishings` table:
  - `id` (Primary Key)
  - `email` (String, Required)
  - `password` (String, Required)
  - `category` (String, Required)
  - `created_at`, `updated_at` (Timestamps)

## 🌐 API Endpoints

### Web Routes
- `GET /` - Home page (redirects to phishing dashboard)
- `GET /phishing` - Phishing records dashboard
- `GET /phishing/{category}` - Display phishing page for specific platform
- `POST /phishing/store` - Store submitted credentials
- `DELETE /phishing/{id}` - Delete phishing record
- `GET /link` - Link generation page
- `GET /success` - Success confirmation page

### Authentication Routes
- Standard Laravel authentication routes (`/login`, `/register`, `/logout`)
- Protected dashboard routes requiring authentication

## 🔧 Configuration

### Environment Variables
Key environment variables to configure:

```env
APP_NAME="Phishing Simulation Platform"
APP_ENV=local
APP_KEY=base64:your-app-key
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=phishing_platform
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
```

## 🎨 Customization

### Adding New Platforms
1. Create new view in `resources/views/login/{platform}.blade.php`
2. Add platform to the array in `resources/views/phishing/link.blade.php`
3. Update routes if necessary

### Styling Customization
- Modify `resources/css/app.css` for global styles
- Platform-specific styles are included in individual login views
- Bootstrap variables can be customized in SCSS files

## 🔒 Security Considerations

### Implemented Security Measures
- CSRF protection on all forms
- Input validation and sanitization
- SQL injection prevention through Eloquent ORM
- XSS protection with Blade templating
- Secure password hashing (if implementing user management)

### Recommendations for Production
1. **Environment Security**:
   - Set `APP_DEBUG=false` in production
   - Use strong, unique `APP_KEY`
   - Secure database credentials

2. **Server Security**:
   - Implement HTTPS/SSL
   - Use firewall rules
   - Regular security updates

3. **Data Protection**:
   - Implement data retention policies
   - Consider encryption for stored credentials
   - Regular database backups

## 🧪 Testing

### Running Tests
```bash
# Run all tests
php artisan test

# Run specific test
php artisan test --filter PhishingTest

# Generate code coverage report
php artisan test --coverage
```

## 📝 License

This project is licensed under the MIT License.

## ⚖️ Legal & Ethical Notice

**IMPORTANT**: This software is provided for educational and authorized security testing purposes only. Users are responsible for ensuring compliance with applicable laws and regulations. The developers assume no liability for misuse or unauthorized use of this software.

### Authorized Use Cases:
- Security awareness training
- Educational demonstrations
- Penetration testing (with explicit authorization)
- Research purposes (with ethical approval)

### Prohibited Use Cases:
- Unauthorized credential harvesting
- Malicious phishing campaigns
- Any illegal activities
- Violation of privacy laws

## 🔄 Version History

### v1.0.0 (Current)
- Initial release
- Basic phishing simulation functionality
- Support for 4 major platforms
- Admin dashboard with filtering
- Bootstrap 5 responsive design

---

**⚠️ Remember**: Use responsibly and only for legitimate educational purposes!
