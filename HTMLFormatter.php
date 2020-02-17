<?php

class HTMLFormatter
{
    public function format($article)
    {
      return  <<<EOT
<!Doctype>
<html>
<head>
    <title>{$article['title']}</title>
</head>
<body>
    <h1>{$article['title']}</h1>
    <div>{$article['content']}</div>
</body>
</html>
EOT;
    }
}
