<?php
/**
 * @domain Developpement
 * @category Accounting
 *
 * 1 - Service de collect de donnée (cron ?)
 *     Download PCG--1erJanvier-{YEAR}.pdf
 *     Converte PDF to SVG/HTML
 * 2 - Service d'extraction des données collecté
 *     Scan
 *     Parse
 *     Format
 * 3 - Service de publication des donnée
 *     Export to JSON, XML, SQL
 * 4 - exploitation des donnée
 *     diff, merge, ...
 *     IA, cohérence, ...
 */
namespace PCG\Ingestion;

/**
 * Agent Scrap - A Scraper automate extraction
 */
class Scraper
{
  static $config;
  
  static public function Download($version='last') {
  }
  static public function Extract($version='last') {
  }
  static public function Check($version='last') {
  }
  static public function Push($version='last') {
  }
}
