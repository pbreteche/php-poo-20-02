<?php

class HTMLFormatter
{
    public function format($article)
    {
      return  <<<EOT
<!Doctype>
<html>
<head>
    <title>$article</title>
</head>
<body>
    <h1>$article</h1>
</body>
</html>
EOT;
    }
}
