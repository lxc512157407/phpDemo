<?php
echo 'php EOF 使用说明:（无论哪里单引号不解释变量和转义字符。双引号会进行相应的转变。所以单引号的效率会比双引号的要高）；<br />';
echo <<<EOF
1.必须后接分号。<br />
2.EOF可以用任意字符代替只需保证结束标识与开始表示一致。<br />
3.结束标识必须顶格独占一行（必须从首行开始，前后不能衔接任何空白和字符。<br />
4.开始标识符可以不带引号或带单引号，不带引号与带双引号效果相同解释变量和转义符号。带单引号则不解释。<br />
EOF;
echo <<<someDescript
1.我很可爱<br />
2.我不会过期 <br />
3.我是谁 <br />
4.我在哪里 <br />
someDescript;



