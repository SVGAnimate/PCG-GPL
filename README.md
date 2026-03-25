# Plan Comptable Général sous GPL

<p align="center" width="100%">
    <img  src="https://raw.githubusercontent.com/SVGAnimate/PCG-GPL/refs/heads/python3.12.3/share/img/python.png" alt="La liberté est un droit pour tous"> 
</p>

```
Domain Developpement
Package Accounting
Namespace Ingestion

src/
├── Service/
│   └── PCG/
│       ├── Model/
│       │   ├── Account.py
│       │   └── Regulation.py
│       ├── ScraperFactory.py
│       └── Scraper/
│           └── Format/
│               ├── JSON/
│               ├── PDF/
│               └── HTML/
│                   ├── ScraperHTML.py
│                   ├── Config/
│                   │   ├── ConfigBase.py
│                   │   ├── Config2014.py
│                   │   └── Config2025.py
│                   ├── Col.php
│                   ├── Raw.php
│                   ├── DocumentFactory.py
│                   └── Document/
│                       ├── DocumentBase.py
│                       ├── Document2014.py
│                       ├── Document2025.py
│                       ├── PageFactory.py
│                       └── Page/
│                           ├── PageBase.py
│                           ├── Page2014.py
│                           └── Page2025.py
└── README.md
```
