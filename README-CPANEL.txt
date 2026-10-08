ANKATE CONSULTING LTD — FINAL CPANEL DEPLOYMENT NOTES

1. Upload the contents of this folder to the document root for ankateconsulting.co.ke
   (usually public_html/). Do not upload the outer folder itself unless you want the site at /ankate-cpanel/.
2. The site is a static multi-page HTML/CSS/JS website with PHP handlers for contact and newsletter forms.
3. Before launch, confirm PHP mail() is enabled by your host. If not, replace the handlers with SMTP/PHPMailer
   using the host's approved SMTP credentials.
4. Keep newsletter-leads.csv protected. .htaccess denies direct web access to CSV files.
5. The Ankate logo is included locally at assets/img/ankate-logo.png.
6. Add Google Search Console and Analytics/Tag Manager after the domain is live.
7. Submit sitemap.xml in Search Console.
8. Recommended production hardening: SMTP mail delivery, spam protection (honeypot/reCAPTCHA), structured data,
   conversion tracking, privacy/cookie notices where applicable, and an authenticated CMS for content management.
9. Never put SMTP passwords or API keys in public HTML/JS.

FINAL SITE ARCHITECTURE
- Homepage
- About
- Services hub
- Six dedicated service pages under /services/
- Approach
- Case-study hub and three case-study pages under /case-studies/
- Insights hub and HR & AI article under /insights/
- Contact
- Static content studio/admin page for offline drafting and export

VISUAL / IMAGERY UPDATE
- Navy, gold, white and cream corporate palette; no green/teal UI treatment.
- Homepage uses a horizontal, full-width hero with a dark translucent content panel and local HD African workplace photography.
- Services page uses a distinct local HD African corporate hero image.
- Case-study hub uses three different photo-realistic African workplace images for Compliance, People and Growth.
- Individual case-study pages use distinct local hero imagery.
- All public imagery is stored locally under assets/img so the package works without an external image host.

CASE-STUDY PUBLICATION STATEMENT
Ankate Consulting confirms that all case-study materials published on this website are posted with the written approval
of the relevant people and/or client organisations for publication. Client names, metrics, testimonials and identifiable
details are published with the applicable approval, and confidential employee information is not published without the
necessary authorisation.

CONTENT NOTE
Case studies use the approved outcome themes supplied for the website. Do not add client-specific metrics, testimonials,
identifiable details or confidential information unless the applicable written approval has been obtained.
