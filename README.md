# Plan Comptable Général sous GPL

<p align="center" width="100%">
    <img  src="https://raw.githubusercontent.com/SVGAnimate/PCG-GPL/refs/heads/main/share/img/dessin.png" alt="La liberté est un droit pour tous"> 
</p>

```
Domain Developpement
Package Accounting
Namespace Ingestion

src/
├── Service/
│   └── PCG/
│       ├── Model/
│       │   ├── Account.php
│       │   └── Regulation.php
│       ├── ScraperFactory.php
│       └── Scraper/
│           └── Format/
│               ├── JSON/
│               ├── PDF/
│               └── SVG/
│                   ├── ScraperSVG.php
│                   ├── Config/
│                   │   ├── ConfigBase.php
│                   │   ├── Config2014.php
│                   │   └── Config2025.php
│                   ├── Col.php
│                   ├── Raw.php
│                   ├── DocumentFactory.php
│                   └── Document/
│                       ├── DocumentBase.php
│                       ├── Document2014.php
│                       ├── Document2025.php
│                       ├── PageFactory.php
│                       └── Page/
│                           ├── PageBase.php
│                           ├── Page2014.php
│                           └── Page2025.php
└── README.md
```
