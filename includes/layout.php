<?php


require_once __DIR__ . '/auth.php';

function render_auth_page_start(string $title): void
{
    $appName = APP_NAME;
    echo <<<HTML
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{$title} | {$appName}</title>
  <style>
    :root {
      --primary: #005a9c;
      --secondary: #0d7c66;
      --surface: #ffffff;
      --bg: linear-gradient(135deg, #e8f2ff 0%, #f7fbff 45%, #eef8f3 100%);
      --text: #17324d;
      --muted: #5a6f85;
      --danger: #b42318;
      --success: #067647;
      --shadow: 0 16px 40px rgba(7, 52, 90, 0.15);
    }
    * { box-sizing: border-box; }
    body { margin: 0; font-family: "Prompt", "Segoe UI", Tahoma, sans-serif; background: var(--bg); color: var(--text); min-height: 100vh; }
    a { color: var(--primary); text-decoration: none; }
    .page { width: min(1100px, calc(100% - 32px)); margin: 0 auto; padding: 32px 0 48px; }
    .hero { display: grid; grid-template-columns: 1.2fr .8fr; gap: 24px; align-items: stretch; }
    .card { background: var(--surface); border-radius: 24px; box-shadow: var(--shadow); padding: 28px; }
    .hero-banner { background: radial-gradient(circle at top right, rgba(244, 180, 0, 0.18), transparent 28%), linear-gradient(145deg, #004b8d 0%, #0d7c66 100%); color: #fff; }
    .badge { display: inline-block; padding: 8px 14px; border-radius: 999px; background: rgba(255,255,255,0.18); font-size: 14px; }
    h1, h2, h3 { margin-top: 0; }
    h1 { font-size: clamp(28px, 5vw, 42px); line-height: 1.15; }
    p { line-height: 1.7; }
    form { display: grid; gap: 16px; }
    label { display: grid; gap: 8px; font-weight: 500; }
    input { width: 100%; padding: 12px 14px; border: 1px solid #c7d8ea; border-radius: 14px; font: inherit; }
    button, .button { border: 0; border-radius: 14px; padding: 12px 16px; background: var(--primary); color: #fff; font: inherit; cursor: pointer; display: inline-block; }
    .button.alt { background: var(--secondary); }
    .button.warn { background: #9a3412; }
    .flash { padding: 14px 16px; border-radius: 14px; margin-bottom: 16px; font-weight: 500; }
    .flash.error { background: #fef3f2; color: var(--danger); border: 1px solid #fecdca; }
    .flash.success { background: #ecfdf3; color: var(--success); border: 1px solid #abefc6; }
    .stats { display: grid; gap: 14px; margin-top: 18px; }
    .stat { padding: 16px; border-radius: 18px; background: rgba(255,255,255,0.12); }
    .panel-list { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-top: 20px; }
    .panel { background: #fff; border-radius: 18px; border: 1px solid #dbe7f3; padding: 18px; }
    .muted { color: var(--muted); }
    .nav-row { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 24px; }
    @media (max-width: 860px) { .hero { grid-template-columns: 1fr; } .page { width: min(100% - 24px, 1100px); } }
  </style>
</head>
<body>
  <div class="page">
HTML;
}

function render_auth_page_end(): void
{
    echo '</div></body></html>';
}
