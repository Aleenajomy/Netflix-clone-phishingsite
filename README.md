# 🎬 Netflix-Clone Phishing Site

📧 **Phishing Awareness Campaign – Netflix Clone Project**  
This project simulates a phishing attack using a fake Netflix login page in a secure, offline environment. It is intended to raise awareness about phishing techniques and help users identify fake websites.

---

## 📝 Project Overview

This awareness campaign demonstrates how a cloned login page can trick users into entering their credentials.

### The project includes:
- ✅ A cloned Netflix login interface  
- ✅ A PHP script that captures entered credentials  
- ✅ A sample redirection or awareness message after login  
- ✅ Optional supporting materials: poster, slides, and script  

---

## 📌 Purpose

To **educate users** about phishing attacks through simulation.

---

## ⚙️ Requirements

- Any web server capable of running PHP (e.g., **XAMPP, WAMP, MAMP**, or Apache with PHP installed)  
- Basic browser to access the demo site  
- **Run the site offline or in a controlled environment**  
- **Do NOT use real credentials**  
- For supporting materials: PDF or PowerPoint viewer (if using slides/poster)

---

## ▶️ How to Run the PHP Demo

1. **Install a Local Web Server with PHP Support**  
   Download and install **XAMPP**, **WAMP**, **MAMP**, or ensure Apache/Nginx has PHP enabled.

2. **Copy Project Files**  
   Place all files into your web server’s root directory:
   - For **XAMPP**: `C:\xampp\htdocs\Netflix-clone-phishingsite`  
   - For **MAMP**: `Applications/MAMP/htdocs/Netflix-clone-phishingsite`

3. **Start the Web Server**  
   Open your control panel and start Apache  
   (MySQL is not needed for this project)

4. **Access the Demo**  
   Open your browser and go to:  
   `http://localhost/Netflix-clone-phishingsite/index.html`

5. **Test the Simulation**  
   Enter any sample credentials — they'll be logged for awareness.

---

## 📁 Files Included

| File / Folder       | Purpose                                         |
|---------------------|-------------------------------------------------|
| `index.html`        | Fake Netflix login page (entry point)           |
| `login.php`         | Captures and stores credentials in a log file   |
| `login_log.txt`     | Logs the login attempts                         |
| `style.css`         | Custom styling to match Netflix branding        |

---

## 🚨 Disclaimer

This project is intended strictly for **educational and internal awareness** training.  
**Do not deploy this site online**, send real phishing emails, or collect real credentials.  
Phishing is a criminal offense if done without consent or in real-world scenarios.

---

## ✅ How It Works

1. The user opens the fake login page (`index.html`).
2. When they enter an email and password, the data is saved to `login_log.txt` using `login.php`.
3. After login, optionally redirect them to an awareness message like:

> 🛑 *"You just entered your credentials on a fake site. This was a demo to raise phishing awareness."*

---

## 💡 Objective

This phishing simulation is designed to:

- 🎯 Show how attackers mimic trusted websites like **Netflix**
- 🛡️ Teach users how to detect phishing attempts (e.g., **URL mismatch, no HTTPS**)
- 💬 Encourage safe practices like verifying site URLs and enabling **2FA**
- 📢 Be part of a **cybersecurity awareness campaign** (with posters, slides, videos)

---

## 👤 Author

**Aleena Jomy**  
For academic submission and cybersecurity awareness training only.  
GitHub: [@Aleenajomy](https://github.com/Aleenajomy)
