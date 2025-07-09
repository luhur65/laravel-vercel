<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kiriman Doa</title>
  <style>
    body {
      background: #f4f6fb;
      font-family: 'Segoe UI', Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 500px;
      margin: 40px auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.08);
      padding: 32px 28px 28px 28px;
      border-top: 6px solid #6c63ff;
    }
    .header {
      text-align: center;
      margin-bottom: 24px;
    }
    .header h1 {
      color: #6c63ff;
      font-size: 2rem;
      margin: 0 0 8px 0;
      letter-spacing: 1px;
    }
    .subtitle {
      color: #888;
      font-size: 1rem;
      margin-bottom: 24px;
      text-align: center;
    }
    .doa-box {
      background: #f0f2fa;
      border-left: 4px solid #6c63ff;
      padding: 18px 20px;
      border-radius: 8px;
      font-size: 1.1rem;
      color: #333;
      margin-bottom: 24px;
      font-style: italic;
    }
    .footer {
      text-align: center;
      color: #aaa;
      font-size: 0.95rem;
      margin-top: 24px;
    }
    .jemaat {
      font-weight: bold;
      color: #444;
      font-size: 1.1rem;
      margin-bottom: 8px;
    }
    @media (max-width: 600px) {
      .container { padding: 18px 6px; }
      .header h1 { font-size: 1.3rem; }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>🙏 Kiriman Doa</h1>
      <div class="subtitle">Satu hati dalam doa, satu suara dalam harapan</div>
    </div>
    <div class="jemaat">Jemaat: {{ $data['nama'] }}</div>
    <div class="doa-box">{{ $data['doa'] }}</div>
    <div class="footer">
      <span>Terima kasih telah berbagi doa. Tuhan memberkati 🙏</span>
    </div>
  </div>
</body>
</html>