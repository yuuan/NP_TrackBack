<?php 
define('_TB_LIST_IT', '�����ꥹ�Ȥ��ɲ�');
define('_TB_DESCRIPTION', '�ȥ�å��Хå��μ�������Ԥ��ޤ�');

define('_TB_NORTIFICATION_MAIL_BODY', "<%blogname%> ���� ID:<%tb_id%> �ε������Ф��ƥȥ�å��Хå���������ޤ����� �ܺ٤ϲ����ΤȤ���Ǥ�:\n\nURL:\t<%url%>\n�����ȥ�:\t<%title%>\n����:\t<%excerpt%>\n�֥�̾:\t<%blogname%>");
define('_TB_NORTIFICATION_MAIL_TITLE', "�ȥ�å��Хå���������ޤ��� ID:<%tb_id%>");

define('_TB_AcceptPing', '�ȥ�å��Хå��μ��դ򤹤뤫?');
define('_TB_SendPings', '�ȥ�å��Хå����������ǽ�ˤ��뤫?');
define('_TB_AutoXMLHttp', 'autodiscovery��ǽ(������Υ�����TrackbackURL�μ�ư����)��Ȥ���?');
define('_TB_CheckIDs', 'ping���ջ���ͭ����itemid���ɤ���������å����뤫?');

define('_TB_tplHeader', 'TB�����ƥ�ץ졼��(�إå���)');
define('_TB_tplEmpty', 'TB�����ƥ�ץ졼��(0��ΤȤ�)');
define('_TB_tplItem', 'TB�����ƥ�ץ졼��(�����ƥ���)');
define('_TB_tplFooter', 'TB�����ƥ�ץ졼��(�եå���)');

define('_TB_tplHeader_VAL', "<div class=\"tb\">\n\t<div class=\"head\">�ȥ�å��Хå�</div><%admin%>\n\n");
define('_TB_tplEmpty_VAL', "\t<div class=\"empty\">\n\t\t���Υ���ȥ�˥ȥ�å��Хå��Ϥ���ޤ���\n\t</div>\n\n");
define('_TB_tplItem_VAL', "\t<div class=\"item\">\n\t\t<div class=\"name\"><%name%></div>\n\t\t<div class=\"body\">\n\t\t\t<a href=\"<%url%>\"><%title%>:</a> <%excerpt%>\n\t\t</div>\n\t\t<div class=\"date\">\n\t\t\t<%date%>\n\t\t</div>\n\t</div>\n\n");
define('_TB_tplFooter_VAL', "\t<div class=\"info\">\n\t\t����<a href=\"<%action%>\">�ȥ�å��Хå�URL</a>��ȤäƤ��ε����˥ȥ�å��Хå������뤳�Ȥ��Ǥ��ޤ���\n\t\t�⤷���ʤ��Υ֥����ȥ�å��Хå��������б����Ƥ��ʤ����ˤ�<a href=\"<%form%>\" onclick=\"window.open(this.href, 'trackback', 'scrollbars=yes,width=600,height=340,left=10,top=10,status=yes,resizable=yes'); return false;\">������Υե�����</a>����ȥ�å��Хå����������뤳�Ȥ��Ǥ��ޤ���.\n\t</div>\n</div>");

define('_TB_tplLocalHeader', '������TB�����ƥ�ץ졼��(�إå���)');
define('_TB_tplLocalEmpty', '������TB�����ƥ�ץ졼��(0��ΤȤ�)');
define('_TB_tplLocalItem', '������TB�����ƥ�ץ졼��(�����ƥ���)');
define('_TB_tplLocalFooter', '������TB�����ƥ�ץ졼��(�եå���)');

define('_TB_tplLocalHeader_VAL', "<div class=\"tblocal\">\n\t<div class=\"head\">������ȥ�å��Хå�</div>\n\n");
define('_TB_tplLocalEmpty_VAL', "");
define('_TB_tplLocalItem_VAL', "\t<div class=\"item\">\n\t\t<div class=\"body\">\n\t\t\t<%delete%> <a href=\"<%url%>\"><%title%></a>: <%excerpt%>\n\t\t</div>\n\t\t<div class=\"date\">\n\t\t\t<%timestamp%>\n\t\t</div>\n\t</div>\n\n");
define('_TB_tplLocalFooter_VAL', "\t</div>");

define('_TB_tplTbNone', 'TB��ɽ������(0��)');
define('_TB_tplTbOne', 'TB��ɽ������(1��)');
define('_TB_tplTbMore', 'TB��ɽ������(2��ʾ�)');
define('_TB_dateFormat', '���դη���');
define('_TB_dateFormat_VAL', "%Y/%m/%d %H:%I");

define('_TB_ajaxEnabled', '�������̤�Ajax��ͭ���ˤ��뤫');
define('_TB_NotifyEmail', 'ping���ջ��Υ᡼��������(;�Ƕ��ڤä�ʣ�����ϲ�ǽ)');
define('_TB_NotifyEmailBlog', 'ping���ջ��Υ᡼��������(;�Ƕ��ڤä�ʣ�����ϲ�ǽ)');

define('_TB_DropTable', '�ץ饰����κ�����˥ǡ����������뤫?');
define('_TB_HideUrl', '����ɽ���κݤ˳�����URL�������쥯�Ȥ��Ѵ����뤫?');
define('_TB_ItemAcceptPing', 'TB����դ��뤫?');
define('_TB_isAcceptWOLink', '���ڥ�󥯤��ʤ��Ƥ�TB����դ��뤫?');
define('_TB_isAcceptWOLinkDef', '���ڥ�󥯤��ʤ��Ƥ�TB����դ��뤫? (blog�ǥե����)');
define('_TB_AllowTrackBack', '���Υ֥���TB����դ��뤫?');

define('_TB_isAcceptWOLink_VAL', '�֥��ǥե���Ȥ˽���|default|�Ϥ�|yes|������|no');
define('_TB_isAcceptWOLinkDef_VAL', '�Ϥ�|yes|������(��α)|block|������(̵��)|ignore');
