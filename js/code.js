$(document).ready(function() {
	// 只对代码块进行渲染，嵌入式 code tag 不渲染
	// 没有指定语言不显示行号，指定语言才显示行号
	$("pre code").addClass("prettyprint");
    $("pre code[class*=lang-]").addClass("linenums");
    prettyPrint();
});