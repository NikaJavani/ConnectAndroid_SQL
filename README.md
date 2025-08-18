# Nika Javani — GitHub Profile README (Final)

Hi — I'm **Nika**, a high-school student and self-taught programmer building Android apps, websites, and data-science projects. I create practical tools (like the Piyatech rating app) and experiments that show full-stack thinking: frontend, backend, databases, and ML.

---

## 🗂️ Categories (how I organize my repos)

I group projects into four clear categories so visitors can quickly find my work and see breadth of skills.

### 1) Web Development

* Example repo names:

  * `web-portfolio-site`
  * `web-feedback-sqlserver` (Website that saves form data to SQL Server)
* Suggested topics: `web`, `html`, `css`, `javascript`, `nodejs`, `express`, `aspnet`, `sqlserver`, `php`.

### 2) Data Science & AI

* Example repo names:

  * `ds-covid19-analysis`
  * `ds-ml-classifier`
* Suggested topics: `python`, `pandas`, `numpy`, `scikit-learn`, `jupyter-notebook`, `data-analysis`.

### 3) Mobile App Development

* Example repo names:

  * `mobile-rating-app-sqlserver` (Android app that sends `Name` + `Rating` to SQL Server)
  * `mobile-sql-connector`
* Suggested topics: `android`, `java`, `kotlin`, `android-studio`, `sqlserver`.

### 4) Databases & Backend Systems

* Example repo names:

  * `db-web-to-sql-connector` (website ↔ SQL Server integration)
  * `api-crud-sqlserver`
* Suggested topics: `sqlserver`, `rest-api`, `aspnet`, `nodejs`, `php`, `database-design`.

---

## 🔧 Repo naming & topics — recommended convention

* Use the pattern: `<category>-<shortname>-<tech>` (e.g. `web-feedback-sqlserver`, `mobile-rating-app-sqlserver`).
* Add topic tags on each repo so recruiters and GitHub search can find them. Keep tags short and relevant (see suggested topics above).

---

## ✅ How to create your profile README on GitHub (step-by-step)

1. Create a new **repository** with the exact name of your GitHub username: `NikaJavani`.
2. Make it **Public** and check **Initialize this repository with a README**.
3. Edit the generated `README.md` and paste the content from this profile README (you can copy sections you like).
4. Commit changes and visit your GitHub profile — the README will appear under your profile bio.

---

## 🏷️ How to add topics to a repo

1. Open the repository page on GitHub.
2. Click the gear icon or the "Manage topics" link near the repo description.
3. Type topics separated by commas and press Enter. Save.

---

## 📌 How to pin repositories to your profile (recommended 4-6)

1. Go to your GitHub profile page.
2. Click the pencil icon in the "Pinned repositories" section or "Customize your pins".
3. Search and select up to 6 repositories to pin. Aim to pin 1 from each category.

---

## 🔁 Suggested repo names for your current projects

* **Android → SQL Server app:** `mobile-rating-app-sqlserver` — topics: `android`, `java`, `sqlserver`, `android-studio`.
* **Website → SQL Server:** `web-feedback-sqlserver` — topics: `web`, `html`, `css`, `javascript`, `sqlserver`, `backend`.

---

## 📋 Quick checklist (ready-to-publish)

* [ ] Create repos with recommended names.
* [ ] Add clear `README.md` for each repo (use the template below).
* [ ] Add topics to each repo.
* [ ] Push at least one commit with sample data or screenshots.
* [ ] Pin your best 4-6 repos on your profile.

---

## 📄 Repo README template (copy into each project's `README.md`)

````
# Project Title — short description (1 line)

![demo-gif-or-screenshot](assets/demo.gif)

## 🔧 Tech stack
- Languages / frameworks: (e.g. Java, Android Studio, Node.js, Express, MSSQL)
- Tools: (e.g. Android Studio, Postman)

## ℹ️ Features
- Feature 1
- Feature 2

## 🚀 How to run locally
1. Prerequisites: Java/Node/Python, Android Studio, SQL Server (or Docker)
2. Clone the repo:
   ```bash
   git clone https://github.com/NikaJavani/<repo-name>.git
   cd <repo-name>
````

3. Setup database (example for SQL Server):

   ```sql
   CREATE TABLE Ratings (
     Id INT IDENTITY(1,1) PRIMARY KEY,
     Name NVARCHAR(100) NOT NULL,
     Rating INT NOT NULL,
     SubmittedAt DATETIME DEFAULT GETDATE()
   );
   ```
4. Import sample data (if provided) and configure `config` / `.env` with DB credentials.
5. Run the backend (or open the Android project in Android Studio and run on emulator/device).

## 🧪 API (if applicable)

* `POST /api/ratings` — body: `{ "name": "Nika", "rating": 5 }`
* `GET /api/ratings` — returns list of ratings

## 📁 Project structure

* `/src` — source code
* `/assets` — screenshots, demo GIFs
* `/docs` — notes, DB schema

## 📬 Contact

* GitHub: `github.com/NikaJavani`
* Email: [your-email@example.com](mailto:your-email@example.com)

## 📝 License

Specify a license (e.g. MIT)

```

---

## Next steps — choose one and I'll do it now
1. **Create a polished repo README template** (I included a basic one above; I can make a more detailed, ready-to-copy version).
2. **Generate a detailed README for `mobile-rating-app-sqlserver`** with full Android + backend + DB setup (I can use Node.js/Express + `mssql` or ASP.NET or PHP — tell me which or I’ll default to Node.js/Express).
3. **Generate a detailed README for `web-feedback-sqlserver`** (frontend + backend + SQL Server instructions).
4. **Help you create the actual repo files** (I’ll provide exact file contents you can copy-paste into each repo).

---

If you want me to continue, say which next step you pick (or I can proceed with Step 1: full repo README template + a SQL Server example).

```
