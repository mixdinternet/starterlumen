<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{ $nome }}</title>
</head>

<body style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;" border="0" marginheight="0" marginwidth="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="left">
            <span style="font-size:20px; font-weight: bold; padding: 0 20px;">{{ $nome }}</span><br />
            <span style="font-size:14px; color:#888; padding: 0 20px;">{{ $host }}</span>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="font-weight:bold; padding: 0 20px;">DADOS DO FORMULÁRIO:</td>
    </tr>
    <tr>
        <td style="font-size:12px; padding: 0 20px;">
            {!! $conteudo !!}
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td align="center">
            <span style="color:#888; font-size: 21px; font-weight:bold;">{{ $host }}</span>
        </td>
    </tr>
</table>
</body>
</html>
