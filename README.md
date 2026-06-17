# SecureOps360

Enterprise IT Operations Management Platform built using Laravel and Filament.

![Laravel](https://img.shields.io/badge/Laravel-13-red)
![PHP](https://img.shields.io/badge/PHP-8.3-blue)
![Filament](https://img.shields.io/badge/Filament-5-orange)
![MySQL](https://img.shields.io/badge/MySQL-Database-green)

---

## Overview

SecureOps360 is a centralized IT Operations and Information Security Management Platform designed to help organizations manage IT assets, security incidents, operational risks, and compliance activities through a single dashboard.

The project was inspired by real-world challenges encountered in enterprise IT environments where asset information, incident records, compliance documentation, and risk assessments are often scattered across spreadsheets and disconnected systems.

---

## Project Type

**Self-Initiated Portfolio Project**

Designed and developed independently as a portfolio project to demonstrate practical skills in:

- IT Operations
- Information Security
- Data Management
- Risk Assessment
- Dashboard Development
- Enterprise Application Design

---

## Business Problem

Many organizations struggle with:

- Tracking IT assets efficiently
- Managing security incidents consistently
- Monitoring operational risks
- Maintaining compliance documentation
- Producing centralized management reports

These activities are often handled manually, increasing the risk of data inconsistency and delayed decision-making.

---

## Solution

SecureOps360 provides a centralized platform that enables organizations to:

- Register and monitor IT assets
- Record and manage incidents
- Conduct risk assessments
- Track compliance status
- Visualize operational metrics through dashboards

---

# Features

## Dashboard

Executive overview displaying:

- Total Assets
- Active Incidents
- High Risk Items
- Compliance Status

---

## Asset Management

Track organizational assets including:

- Asset Name
- Category
- Department
- Owner
- Status

Benefits:

- Improve asset visibility
- Support asset lifecycle management

---

## Incident Management

Record operational and security incidents.

Features:

- Incident Classification
- Severity Tracking
- Status Monitoring
- Resolution Tracking

Benefits:

- Faster incident response
- Better operational visibility

---

## Risk Assessment

Manage and evaluate risks.

Features:

- Likelihood Assessment
- Impact Assessment
- Risk Scoring
- Risk Prioritization

Formula:

Risk Score = Likelihood × Impact

Benefits:

- Risk-based decision making
- Better mitigation planning

---

## Compliance Monitoring

Track organizational compliance activities.

Features:

- Compliance Status
- Control Tracking
- Review Monitoring

Benefits:

- Improved governance
- Better audit readiness

---

# Technology Stack

## Backend

- Laravel 13

## Frontend

- Filament 5
- Livewire

## Database

- MySQL

## Environment

- Laragon
- PHP 8.3

---

# System Modules

| Module | Purpose |
|----------|----------|
| Dashboard | Executive monitoring |
| Assets | Asset inventory management |
| Incidents | Incident tracking |
| Risks | Risk assessment |
| Compliance | Compliance monitoring |

---

# Database Design

Main Tables:

```text
users
assets
incidents
risks
compliances
```

Relationships:

```text
Assets
│
├── Incidents
│
├── Risks
│
└── Compliance Records
```

---

# Screenshots

## Dashboard

Insert dashboard screenshot here.

```text
docs/screenshots/dashboard.png
```

---

## Asset Management

Insert asset management screenshot here.

```text
docs/screenshots/assets.png
```

---

## Incident Management

Insert incident screenshot here.

```text
docs/screenshots/incidents.png
```

---

## Risk Assessment

Insert risk assessment screenshot here.

```text
docs/screenshots/risks.png
```

---

## Compliance Monitoring

Insert compliance screenshot here.

```text
docs/screenshots/compliance.png
```

---

# Installation

Clone repository:

```bash
git clone https://github.com/yourusername/SecureOps360.git
```

Move into project:

```bash
cd SecureOps360
```

Install dependencies:

```bash
composer install
```

Copy environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Configure database in:

```env
DB_CONNECTION=mysql
DB_DATABASE=secureops360
DB_USERNAME=root
DB_PASSWORD=
```

Run migration:

```bash
php artisan migrate
```

Seed sample data:

```bash
php artisan db:seed
```

Run application:

```bash
php artisan serve
```

Access:

```text
http://localhost:8000
```

---

# What I Learned

Through this project I gained practical experience in:

- Enterprise application architecture
- Dashboard design
- Data modeling
- Database relationships
- Laravel development
- Filament administration panels
- Information security workflows
- Operational reporting

---

# Project Impact

This project demonstrates the ability to:

- Translate business requirements into software solutions
- Design enterprise dashboards
- Manage operational data effectively
- Develop scalable management systems

---

# Future Improvements

Potential enhancements include:

- Role-Based Access Control (RBAC)
- Email Notifications
- Audit Logging
- Asset QR Code Tracking
- Advanced Reporting
- API Integration
- Mobile Support

---

# Author

## Fikri Alrasyid

Information Systems Graduate

IT Service Group Leader

SQL Server • Information Security • IT Operations • Data Analytics

---

## Contact

GitHub:
https://github.com/FikriAlrasyid

LinkedIn:
https://www.linkedin.com/in/muhammad-fikri-alrasyid-071903244

---

*"Building practical solutions that bridge IT Operations, Information Security, and Business Processes."*
