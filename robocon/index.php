<?php
session_start();
// utf-8 编码格式
header("Content-Type: text/html;charset=utf-8");


if($_SESSION['user'] == 1)
{
  echo "<script>alert('您好，君彬！')</script>";
}
elseif($_SESSION['user'] == 2)
{
  echo "<script>alert('您好，neuq的同学！')</script>";
}
elseif($_SESSION['user'] == 3)
{
    $login = $_SESSION['login'];
    echo "<script>alert('抱歉，";
    echo "$login";
    echo "同学！本部分内容您暂时没有访问权限，如有疑问，请联系君彬同学！');window.location.href='../../index.html'</script>";
}
else
{
  echo "<script>alert('抱歉，请登录后查看！如有疑问，请联系君彬同学！');window.location.href='../login/index.html'</script>";
}

?>



<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<title>index</title>


<style type="text/css">
body {
  font-family: Helvetica, arial, sans-serif;
  font-size: 14px;
  line-height: 1.6;
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: white;
  padding: 30px; }

body > *:first-child {
  margin-top: 0 !important; }
body > *:last-child {
  margin-bottom: 0 !important; }

a {
  color: #4183C4; }
a.absent {
  color: #cc0000; }
a.anchor {
  display: block;
  padding-left: 30px;
  margin-left: -30px;
  cursor: pointer;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0; }

h1, h2, h3, h4, h5, h6 {
  margin: 20px 0 10px;
  padding: 0;
  font-weight: bold;
  -webkit-font-smoothing: antialiased;
  cursor: text;
  position: relative; }

h1:hover a.anchor, h2:hover a.anchor, h3:hover a.anchor, h4:hover a.anchor, h5:hover a.anchor, h6:hover a.anchor {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA09pVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoMTMuMCAyMDEyMDMwNS5tLjQxNSAyMDEyLzAzLzA1OjIxOjAwOjAwKSAgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUM2NjlDQjI4ODBGMTFFMTg1ODlEODNERDJBRjUwQTQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUM2NjlDQjM4ODBGMTFFMTg1ODlEODNERDJBRjUwQTQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QzY2OUNCMDg4MEYxMUUxODU4OUQ4M0REMkFGNTBBNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QzY2OUNCMTg4MEYxMUUxODU4OUQ4M0REMkFGNTBBNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PsQhXeAAAABfSURBVHjaYvz//z8DJYCRUgMYQAbAMBQIAvEqkBQWXI6sHqwHiwG70TTBxGaiWwjCTGgOUgJiF1J8wMRAIUA34B4Q76HUBelAfJYSA0CuMIEaRP8wGIkGMA54bgQIMACAmkXJi0hKJQAAAABJRU5ErkJggg==) no-repeat 10px center;
  text-decoration: none; }

h1 tt, h1 code {
  font-size: inherit; }

h2 tt, h2 code {
  font-size: inherit; }

h3 tt, h3 code {
  font-size: inherit; }

h4 tt, h4 code {
  font-size: inherit; }

h5 tt, h5 code {
  font-size: inherit; }

h6 tt, h6 code {
  font-size: inherit; }

h1 {
  font-size: 28px;
  color: black; }

h2 {
  font-size: 24px;
  border-bottom: 1px solid #cccccc;
  color: black; }

h3 {
  font-size: 18px; }

h4 {
  font-size: 16px; }

h5 {
  font-size: 14px; }

h6 {
  color: #777777;
  font-size: 14px; }

p, blockquote, ul, ol, dl, li, table, pre {
  margin: 15px 0; }

hr {
  background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAECAYAAACtBE5DAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OENDRjNBN0E2NTZBMTFFMEI3QjRBODM4NzJDMjlGNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OENDRjNBN0I2NTZBMTFFMEI3QjRBODM4NzJDMjlGNDgiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4Q0NGM0E3ODY1NkExMUUwQjdCNEE4Mzg3MkMyOUY0OCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0NGM0E3OTY1NkExMUUwQjdCNEE4Mzg3MkMyOUY0OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqqezsUAAAAfSURBVHjaYmRABcYwBiM2QSA4y4hNEKYDQxAEAAIMAHNGAzhkPOlYAAAAAElFTkSuQmCC) repeat-x 0 0;
  border: 0 none;
  color: #cccccc;
  height: 4px;
  padding: 0;
}

body > h2:first-child {
  margin-top: 0;
  padding-top: 0; }
body > h1:first-child {
  margin-top: 0;
  padding-top: 0; }
  body > h1:first-child + h2 {
    margin-top: 0;
    padding-top: 0; }
body > h3:first-child, body > h4:first-child, body > h5:first-child, body > h6:first-child {
  margin-top: 0;
  padding-top: 0; }

a:first-child h1, a:first-child h2, a:first-child h3, a:first-child h4, a:first-child h5, a:first-child h6 {
  margin-top: 0;
  padding-top: 0; }

h1 p, h2 p, h3 p, h4 p, h5 p, h6 p {
  margin-top: 0; }

li p.first {
  display: inline-block; }
li {
  margin: 0; }
ul, ol {
  padding-left: 30px; }

ul :first-child, ol :first-child {
  margin-top: 0; }

dl {
  padding: 0; }
  dl dt {
    font-size: 14px;
    font-weight: bold;
    font-style: italic;
    padding: 0;
    margin: 15px 0 5px; }
    dl dt:first-child {
      padding: 0; }
    dl dt > :first-child {
      margin-top: 0; }
    dl dt > :last-child {
      margin-bottom: 0; }
  dl dd {
    margin: 0 0 15px;
    padding: 0 15px; }
    dl dd > :first-child {
      margin-top: 0; }
    dl dd > :last-child {
      margin-bottom: 0; }

blockquote {
  border-left: 4px solid #dddddd;
  padding: 0 15px;
  color: #777777; }
  blockquote > :first-child {
    margin-top: 0; }
  blockquote > :last-child {
    margin-bottom: 0; }

table {
  padding: 0;border-collapse: collapse; }
  table tr {
    border-top: 1px solid #cccccc;
    background-color: white;
    margin: 0;
    padding: 0; }
    table tr:nth-child(2n) {
      background-color: #f8f8f8; }
    table tr th {
      font-weight: bold;
      border: 1px solid #cccccc;
      margin: 0;
      padding: 6px 13px; }
    table tr td {
      border: 1px solid #cccccc;
      margin: 0;
      padding: 6px 13px; }
    table tr th :first-child, table tr td :first-child {
      margin-top: 0; }
    table tr th :last-child, table tr td :last-child {
      margin-bottom: 0; }

img {
  max-width: 100%; }

span.frame {
  display: block;
  overflow: hidden; }
  span.frame > span {
    border: 1px solid #dddddd;
    display: block;
    float: left;
    overflow: hidden;
    margin: 13px 0 0;
    padding: 7px;
    width: auto; }
  span.frame span img {
    display: block;
    float: left; }
  span.frame span span {
    clear: both;
    color: #333333;
    display: block;
    padding: 5px 0 0; }
span.align-center {
  display: block;
  overflow: hidden;
  clear: both; }
  span.align-center > span {
    display: block;
    overflow: hidden;
    margin: 13px auto 0;
    text-align: center; }
  span.align-center span img {
    margin: 0 auto;
    text-align: center; }
span.align-right {
  display: block;
  overflow: hidden;
  clear: both; }
  span.align-right > span {
    display: block;
    overflow: hidden;
    margin: 13px 0 0;
    text-align: right; }
  span.align-right span img {
    margin: 0;
    text-align: right; }
span.float-left {
  display: block;
  margin-right: 13px;
  overflow: hidden;
  float: left; }
  span.float-left span {
    margin: 13px 0 0; }
span.float-right {
  display: block;
  margin-left: 13px;
  overflow: hidden;
  float: right; }
  span.float-right > span {
    display: block;
    overflow: hidden;
    margin: 13px auto 0;
    text-align: right; }

code, tt {
  margin: 0 2px;
  padding: 0 5px;
  white-space: nowrap;
  border: 1px solid #eaeaea;
  background-color: #f8f8f8;
  border-radius: 3px; }

pre code {
  margin: 0;
  padding: 0;
  white-space: pre;
  border: none;
  background: transparent; }

.highlight pre {
  background-color: #f8f8f8;
  border: 1px solid #cccccc;
  font-size: 13px;
  line-height: 19px;
  overflow: auto;
  padding: 6px 10px;
  border-radius: 3px; }

pre {
  background-color: #f8f8f8;
  border: 1px solid #cccccc;
  font-size: 13px;
  line-height: 19px;
  overflow: auto;
  padding: 6px 10px;
  border-radius: 3px; }
  pre code, pre tt {
    background-color: transparent;
    border: none; }

sup {
    font-size: 0.83em;
    vertical-align: super;
    line-height: 0;
}

kbd {
  display: inline-block;
  padding: 3px 5px;
  font-size: 11px;
  line-height: 10px;
  color: #555;
  vertical-align: middle;
  background-color: #fcfcfc;
  border: solid 1px #ccc;
  border-bottom-color: #bbb;
  border-radius: 3px;
  box-shadow: inset 0 -1px 0 #bbb
}

* {
	-webkit-print-color-adjust: exact;
}
@media screen and (min-width: 914px) {
    body {
        width: 854px;
        margin:0 auto;
    }
}
@media print {
	table, pre {
		page-break-inside: avoid;
	}
	pre {
		word-wrap: break-word;
	}
}
</style>


</head>

<body>
<a href="../../index.html"><p><strong>Go Home</strong><br></p></a>


<h1 id="toc_0">C语言培训题</h1>

<p><strong>2019.11</strong><br>
<strong>Author：junbin</strong></p>

<blockquote>
<p>写在前面：仅适用于2019级机器人新同学考核培训招新使用，请勿用于其他用途，解释权归neuq机器人实验室所有。使用前请仔细阅读以下说明部分。</p>

<ul>
<li><p>由于每个同学基础不一样，针对（例）已经可以很轻松解决的同学，C语言大致上过关了，后续的基础题选做。可以只做发挥题；如果中间进度快的，也可以跳过基础题，直接做发挥题。</p></li>
<li><p>发挥题选做。</p></li>
<li><p>刚开始学的同学，如果进度觉得跟不大上，请及时与作者反馈。若对本文档有任何疑问，也请及时反馈。</p></li>
<li><p>该文档会实时更新，更新进度群里通知，请及时查看。</p></li>
<li><p>最好给出应有的注释，方便程序的可读性。</p></li>
<li><p>每次上交程序时（群里会通知），请把所有代码汇总在一个以<code>&quot;作业次数_姓名.c&quot;（如：1_高君彬.c）</code>命名的文件内，发送至<code>neuqrobocon@163.com</code></p></li>
</ul>
</blockquote>

<hr>

<h2>第三次作业参考例程(更新于2020.1.20)</h2>

<blockquote>

<p><a href="./Example/Example_3.c">点我下载</a>  </p>

<p><a href="./Example/Example_3.html">点我预览</a></p>

</blockquote>


<h2 id="toc_1">关于第二次作业（更新于2019.12.4晚）</h2>

<blockquote>
<p>☆☆钧杰学长大半夜写的程序，很多值得学习的地方，希望大家多多学习，让学长半夜的付出有所意义。接下去的作业大家可以借鉴有关写法~  </p>

<p><a href="./Example/Example_2.c">点我下载第二次作业钧杰学长亲笔☆</a>  </p>

<p><a href="./Example/Example_2.html">点我预览第二次作业钧杰学长亲笔☆</a></p>

<p>考虑到大家近期较忙，第三次作业推迟到下周更新，大家好好复习，下次主要内容：数组&amp;指针，大家有时间的话可以提前学习一下。第三次作业更新会在群里通知。关于第二次的作业反馈以及优秀的作业示例会在近期更新。</p>
</blockquote>

<h2 id="toc_2">关于第二次作业推迟（更新于2019.12.1晚）</h2>

<ul>
<li>好消息，第二次作业上交时间推迟，时间见下面</li>
<li>第一次作业一些建议已经通过邮件反馈给大家了。但是建议仅仅是建议，仅供大家参考，加上看的份数比较多，所以建议内容有限，希望大家见谅~~虽然大家其实做的都挺好的，但是还是能看出很明显的差距，希望大家继续努力。<br></li>
<li>现在收到的第二次作业数量明显比第一次少很多，可能大家有自己的特殊原因，但是希望大家可以坚持下去，不到最后，这一切可能都是白费的，坚持到底才会有收获！</li>
<li>表扬一下第一次作业中的<strong>张德文</strong>和<strong>王烁楠</strong>，他们写的相对较好，大家可以参考一下（所以我可能就不征求他们的意见直接把他们程序放上来了哈，勿怪勿怪）当然再次重申，大家多参考一下钧杰学长的写法，虽然第一次的题目或许简单，但是学长在渗透很多习惯给大家，现在用不上可能以后会很有用！</li>
<li><a href="./good/1_zhang.html">点我查看1_张德文.c</a></li>
<li><a href="./good/1_wang.html">点我查看1_王烁楠.c</a></li>
</ul>

<hr>

<h2 id="toc_3">关于第二次作业(更新于12.1晚)</h2>

<p>上交时间:本周日（12.1）晚23：00前--&gt;推迟到12.3晚上23点（没有写完的同学可以继续写）</p>

<hr>

<h2 id="toc_4">关于第一次作业(更新于11.27晚)</h2>

<blockquote>
<p>☆☆钧杰学长大半夜写的程序，很多值得学习的地方，希望大家多多学习，让学长半夜的付出有所意义。接下去的作业大家可以借鉴有关写法~  </p>

<p><a href="./Example/Example_1.c">点我下载第一次作业钧杰学长亲笔</a>  </p>

<p><a href="./Example/Example_1.html">点我预览第一次作业钧杰学长亲笔</a></p>

<hr>

<p>几点想法：  </p>

<blockquote>
<p>1.文件命名问题：希望大家按着要求来，第一次由于各种原因（刚学还不会整合到一个.c中，我也没说太清楚具体要求怎么个形式等等），之后的几次希望大家按着上面的参考改进。统一以<code>次数_姓名.c</code>附件发过来。有什么意见、建议、想法都可以随着邮件一起发给我们。还有发到上面指定的邮箱，千万别在发到学长学姐的qq邮箱了！</p>

<p>2.文件格式问题：希望大家对魔鬼变量，缩进等格式问题引起重视，建议多看两遍钧杰学长的程序。后续学习过程中，建议参考<a href="https://blog.csdn.net/LIAOYUANGANG/article/details/79174627">华为C语言编程规范</a></p>

<p>3.人机交互问题:项目不同于作业，希望大家多考虑到人机交互和用户体验（比如，运行程序后的可视化提示，在我没有读过你程序的时候能不能正确、舒适地使用你编写的程序）</p>

<p>4.上面几个是共性的问题，单独的将陆续通过邮件回复给大家。</p>
</blockquote>
</blockquote>

<ul>
<li>例：</li>
<li>实现函数 ToLowerCase()，该函数接收一个字符串参数 str，并将该字符串中的大写字母转换成小写字母，之后返回新的字符串。</li>
</ul>

<blockquote>
<p>示例1：</p>
</blockquote>

<div><pre><code class="language-none">输入: &quot;Hello&quot;
输出: &quot;hello&quot;</code></pre></div>

<blockquote>
<p>示例2：</p>
</blockquote>

<div><pre><code class="language-none">输入: &quot;here&quot;
输出: &quot;here&quot;</code></pre></div>

<blockquote>
<p>示例3：</p>
</blockquote>

<div><pre><code class="language-none">输入: &quot;LOVELY&quot;
输出: &quot;lovely&quot;</code></pre></div>

<blockquote>
<p>请完善下面代码</p>
</blockquote>

<div><pre><code class="language-none">char * toLowerCase(char * str){

}</code></pre></div>

<hr>

<hr>

<h2 id="toc_5">第一次作业（已结束）</h2>

<p><strong>基础题</strong></p>

<blockquote>
<p>涉及的点:基础数据类型，判断</p>
</blockquote>

<p><strong>（一）</strong></p>

<ul>
<li>实现一个找三个数最大值的函数Fmax(),该函数接收三个参数a,b,c（假定a,b,c均是整型或者浮点型），返回值为a,b,c中的最大值</li>
<li>提示：请注意数据类型的使用；有能力的同学考虑加上正则表达式（即数据模板的匹配，通俗可以理解为数据类型等是否匹配），增强程序健壮性；</li>
</ul>

<blockquote>
<p>示例1：</p>
</blockquote>

<div><pre><code class="language-none">输入: 2 3 4
输出: 4</code></pre></div>

<blockquote>
<p>示例2：</p>
</blockquote>

<div><pre><code class="language-none">输入: 3.1 3.2 5.6
输出: 5.6</code></pre></div>

<p><strong>（二）</strong></p>

<ul>
<li>实现一个加减乘除计算函数 Calculator()，该函数接收三个参数x,y,calculate(分别表示运算的第一个数，运算的第二个数，运算方式)，之后返回运算结果</li>
<li>提示：请注意数据类型的使用；有能力的同学可以考虑加上正则表达式，增强程序健壮性；</li>
</ul>

<blockquote>
<p>示例1：</p>
</blockquote>

<div><pre><code class="language-none">//这里假设1表示add
输入: 2 3 1
输出: 5</code></pre></div>

<blockquote>
<p>示例2：</p>
</blockquote>

<div><pre><code class="language-none">//这里假定4表示除法
输入: 6 2 4
输出: 3</code></pre></div>

<blockquote>
<p>示例3：</p>
</blockquote>

<div><pre><code class="language-none">//这里假定4表示除法
输入: 6 0 4
输出: error</code></pre></div>

<p><strong>发挥题</strong></p>

<blockquote>
<p>涉及的点:判断，循环，数组（maybe）</p>
</blockquote>

<ul>
<li>实现一个找n个数最大值的函数Fmax(),该函数接收数据个数n及n个参数x1,x2……xn（学习进度较快同学可以使用数组实现）的值，返回值为n个数中的最大值</li>
<li>提示：请注意数据类型的使用；有能力的同学考虑加上正则表达式，增强程序健壮性；</li>
</ul>

<blockquote>
<p>示例1：</p>
</blockquote>

<div><pre><code class="language-none">输入: 4 2 3 4 5
输出: 5</code></pre></div>

<blockquote>
<p>示例2：</p>
</blockquote>

<div><pre><code class="language-none">输入: 3 3.1 3.2 5.6
输出: 5.6</code></pre></div>

<p><strong>下期预告</strong></p>

<blockquote>
<p>循环，进制，数组</p>
</blockquote>

<h2 id="toc_6">第二次作业（已结束）</h2>

<p><strong>基础题</strong></p>

<blockquote>
<p>涉及的点:判断，循环，进制</p>
</blockquote>

<p><strong>（一）</strong></p>

<ul>
<li>编写函数Sum()实现以下表达式,输入参数为n（n为整数），输出f(n)的值</li>
<li>提示：注意对n的正则判断（即n是否为合理的整数），返回值的类型</li>
</ul>

<p><img src="./1.png" alt="1"></p>

<blockquote>
<p>示例1：</p>
</blockquote>

<div><pre><code class="language-none">输入: 1
输出: 1</code></pre></div>

<blockquote>
<p>示例2：</p>
</blockquote>

<div><pre><code class="language-none">输入: 0
输出: 非法字符</code></pre></div>

<blockquote>
<p>示例3：</p>
</blockquote>

<div><pre><code class="language-none">输入: 2
输出: 1.5</code></pre></div>

<p><strong>（二）</strong></p>

<ul>
<li>自学二进制、十进制、十六进制相关知识，设计函数uart_receive()实现如下情景下的功能：</li>
</ul>

<blockquote>
<p>现有一个自制传感器，其返回参数共8个（十六进制形式）：x1 x2 x3 x4 x5 x6 x7 x8；<br>
其中x1,x2为起始标志位，x3(高8位）x4（低8位）组成第一个数a（比如x3=0x01,x4=0x02,那么a=0x0102,对应十进制的258），类似的，x5和x6组成第二个数b,x7和x8组成第三个数c；<br>
若c等于a与b的和（取后16位），且x1为0xaa,x2为0xbb时，则说明传入的数有效，函数输出correct，否则无效，输出error</p>

<p>示例1：</p>
</blockquote>

<div><pre><code class="language-none">输入: 0xaa 0xbb 0x00 0x01 0x00 0x01 0x00 0x02
输出: correct</code></pre></div>

<blockquote>
<p>示例2：</p>
</blockquote>

<div><pre><code class="language-none">输入: 0xaa 0xbb 0x00 0x01 0x00 0x01 0x00 0x01
输出: error</code></pre></div>

<p><strong>发挥题</strong></p>

<blockquote>
<p>涉及的点:数组，指针</p>
</blockquote>

<ul>
<li>进化版自制传感器（我瞎编的）：实现函数super_receive()</li>
</ul>

<blockquote>
<p>现有一个进化版自制传感器，其返回参数共50个（十六进制形式）：x1 x2 …… x50；<br>
同样的，有效数据以0xaa,0xbb开头，然后中间四位组成两个数a和b，最后两位组成c，若a+b（取后16位）=c,则数据有效，否则数据无效。请找出所有的有效信息，函数运行完打印有效数据组数。</p>

<p>一些说明：</p>

<blockquote>
<ol>
<li><p>若这样的一组数：【0xaa 0xbb 0x00 0x01 0xaa 0xbb 0xaa 0xbc 0x00 0x01 0xaa 0xbf】
只有一组有效数据，即【0xaa 0xbb 0x00 0x01 0xaa 0xbb 0xaa 0xbc】，不要误认为2组,即这组数的前面某一段率先出现正确组合时，这一段的数据不可被后面的重用。</p></li>
<li><p>若这样一组数：【0xaa 0xbb 0x00 0x00 0xaa 0xbb 0xaa 0xbc 0x00 0x01 0xaa 0xbf】
有一组有效数据，即【0xaa 0xbb 0xaa 0xbc 0x00 0x01 0xaa 0xbf】，即当前面某一段出现误码时，这一段数据仍可被重用做后续判定。</p></li>
</ol>
</blockquote>
</blockquote>

<p>请补充完善以下代码（仅供参考，可以自己组织）：<br>
（若对数组指针不了解，可以定义50个变量实现，重点在算法实现，如何输入要求可以放宽）  </p>

<div><pre><code class="language-none">
#include &lt;stdio.h&gt;
typedef unsigned char u8;

void super_receive(u8 *data)
{
    
}

int main()
{
    u8 receive[50]={    0xaa,0xbb,0xaa,0xbb,0xaa,0xbb,0x55,0x76, 
                        0x00,0x31,0x32,0xbb,0xaa,0xbb,0x97,0xac,
                        0x23,0xaa,0xbb,0x56,0xaa,0xbb,0x32,0x22,
                        0xaa,0x31,0xff,0xff,0xff,0xaa,0xbb,0xcc,
                        0xdd,0xee,0xff,0xbb,0xdc,0xaa,0xbb,0xaa,
                        0xbb,0x12,0x4a,0xad,0xaa,0xbf,0xf4,0x1a,
                        0xcc,0x12 };
                        
    Sum(); //第一题
    uart_receive();  //第二题
    super_receive(receive);  //第三题
    
    
    return 0;
}
</code></pre></div>

<p><strong>下期预告</strong></p>

<blockquote>
<p>数组，指针</p>
</blockquote>

<h2 id="toc_7">第三次作业（已结束）</h2>

<p><strong>基础题</strong></p>

<blockquote>
<p>涉及的点:数组、指针</p>
</blockquote>

<p><strong>（一）</strong></p>

<ul>
<li>完成例题</li>
</ul>

<p><strong>（二）</strong></p>

<ul>
<li>实现一个排序函数int Compositor(int *data,char *dir)，该函数的功能是对任意已知的数组进行从大到小或者从小到大排序（其中由dir决定如何排序）。</li>
</ul>

<blockquote>
<p>示例1：</p>
</blockquote>

<div><pre><code class="language-none">data={1,3,2,4,5};
Compositor(data,&#39;up&#39;);
-&gt;data={1,2,3,4,5};</code></pre></div>

<blockquote>
<p>示例2：</p>
</blockquote>

<div><pre><code class="language-none">data={1,3,2,4,5};
Compositor(data,&#39;down&#39;);
-&gt;data={5,4,3,2,1};</code></pre></div>

<blockquote>
<p>请完善下面的程序：</p>
</blockquote>

<div><pre><code class="language-none">#include&lt;stdio.h&gt;

int Compositor(int *data,char *dir)
{

}

int main()
{
    int Compositor(int*,char*);  //函数声明
    
    int data1[]={1,7,4,8};
    int data2[]={1,4,7,2,3,99,25};

    Compositor(data1,&quot;up&quot;);
    Compositor(data2,&quot;down&quot;);

    return 0;
}
</code></pre></div>

<p><strong>发挥题</strong></p>

<blockquote>
<p>涉及的点:二维数组</p>
</blockquote>

<ul>
<li>给定一个矩阵 A， 返回 A 的转置矩阵。矩阵的转置是指将矩阵的主对角线翻转，交换矩阵的行索引与列索引。</li>
<li>稍有难度，能实现到什么程度就到什么程度，不用强求</li>
<li>提示：</li>
</ul>

<div><pre><code class="language-none">1 &lt;= A.length &lt;= 1000
1 &lt;= A[0].length &lt;= 1000</code></pre></div>

<blockquote>
<p>示例1：</p>
</blockquote>

<div><pre><code class="language-none">输入：[[1,2,3],[4,5,6],[7,8,9]]
输出：[[1,4,7],[2,5,8],[3,6,9]]</code></pre></div>

<blockquote>
<p>示例2：</p>
</blockquote>

<div><pre><code class="language-none">输入：[[1,2,3],[4,5,6]]
输出：[[1,4],[2,5],[3,6]]</code></pre></div>

<p><strong>下期预告</strong></p>

<blockquote>
<p>单片机（请自行准备单片机）</p>
</blockquote>




</body>

</html>