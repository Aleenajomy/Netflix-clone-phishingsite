# Netflix-clone-phishing-site


Netflix-Clone Phishing Site
📧 Phishing Awareness Campaign – Netflix Clone Project
This project simulates a phishing attack using a fake Netflix login page in a secure, offline environment. It is intended to raise awareness about phishing techniques and help users identify fake websites.

📝 Project Overview
This awareness campaign demonstrates how a cloned login page can trick users into entering their credentials.

The project includes:

A cloned Netflix login interface.
A PHP script that captures entered credentials.
A sample redirection or awareness message after login.
Optional supporting materials: poster, slides, and script.
📌 Purpose:
To educate users about phishing attacks through simulation.

⚙️ Requirements
Any web server capable of running PHP (e.g., XAMPP, WAMP, MAMP, or Apache with PHP installed)
Basic browser to access the demo site
The site must be run offline or in a controlled environment for safety
No real credentials should be used
For displaying supporting materials: PDF or PowerPoint viewer (if using slides/poster)
▶️ How to Run the PHP Demo
Install a Local Web Server with PHP Support
Download and install XAMPP, WAMP, MAMP, or ensure Apache/Nginx has PHP enabled.
Copy Project Files
Place all files (index.html, login.php, login_log.txt, style.css) into your web server’s root directory.
For XAMPP, this is usually C:\xampp\htdocs\Netflix-clone-phishingsite.
For MAMP, it’s Applications/MAMP/htdocs/Netflix-clone-phishingsite.
Start the Web Server
Open your chosen control panel and start Apache (and MySQL if needed, but MySQL is not required for this project).
Access the Demo in Your Browser
Visit http://localhost/Netflix-clone-phishingsite/index.html in your web browser.
Enter sample credentials to see how the PHP script processes and logs them.
📁 Files Included
File / Folder	Purpose
index.html	Fake Netflix login page (entry point)
login.php	Captures and stores credentials in a log file
login_log.txt	Logs the login attempts for awareness review
style.css	Custom styling to match Netflix branding
🚨 Disclaimer
This project is intended strictly for educational and internal awareness training.
Do not deploy this site online, send real phishing emails, or collect real credentials.
Phishing is a criminal offense if done without consent or in real-world scenarios.

✅ How It Works
The user opens the fake login page (index.html).

If they enter any email/password, the data is saved to saved.txt using login.php.

After login, you can optionally redirect them to an awareness message like:

"You just entered your credentials on a fake site. This was a demo to raise phishing awareness."

💡 Objective
This phishing simulation is designed to:

🎯 Show how attackers mimic trusted websites like Netflix.
🛡️ Teach users how to detect phishing attempts (URL mismatch, no HTTPS, etc.).
💬 Encourage safe internet practices like verifying site addresses and enabling 2FA.
📢 Be part of a cybersecurity campaign (along with posters, slides, and video).
👤 Author
Aleena Jomy
For academic submission and cybersecurity awareness training only.
GitHub: @Aleenajomy

