# Web App — GPS Ku

Next.js web application for GPS/transport system with Driver and User roles. Includes legacy PHP student management system and React Native companion app.

## Tech Stack

- **Web:** Next.js 14, React 18, TypeScript, Tailwind CSS 3
- **Database:** Prisma (MySQL), next-auth, bcrypt
- **Legacy:** PHP, MySQL
- **Mobile:** React Native (Expo)

## Project Structure

```
Web-app/
├── app/
│   ├── page.tsx              # Landing page (Driver/User selection)
│   ├── components/
│   │   ├── Navbar/           # Navigation
│   │   ├── login/            # Login components
│   │   └── register/         # Registration components
│   └── api/datasql/          # SQL API routes
├── native/                   # React Native Expo app
│   ├── App.tsx
│   └── package.json
├── asdasd/                   # Legacy PHP system
│   ├── index.php             # Student/course/exam management
│   ├── connect_db.php        # DB connection
│   ├── student_list.php      # Student CRUD
│   ├── course_list.php       # Course CRUD
│   └── exam_result.php       # Exam results
├── prisma/schema.prisma      # User + Post models (MySQL)
├── db.sql, test.sql          # SQL scripts
└── package.json
```

## Setup

```bash
npm install
npm run dev           # Next.js at localhost:3000
npm run dev:native    # Expo native app
```

## Features

- Driver/User role selection
- Login and registration
- Legacy PHP CRUD for students, courses, exam results
- React Native companion app structure
