<?php

enum Topic: string {
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case Laravel = 'Laravel';
}

enum ResourceType: string {
    case File = 'Fitxer';
    case WebArticle = 'Article web';
    case Video = 'Video';
}