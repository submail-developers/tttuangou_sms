<?php

$config["service"] =  array (
  'mail' => 
  array (
    'balance' => true,
  ),
  'sms' => 
  array (
    'driver' => 
    array (
      'ls' => 
      array (
        'name' => '电信通道',
        'intro' => '075开头，网关短信直发（自动重发功能暂时只支持此通道）<br/><a href="http://cenwor.com/go.php?w=tg.shop.sms.qxt" target="_blank"><font color="red">点此在线购买</font></a>',
      ),
      'qxt' => 
      array (
        'name' => 'GD106通道',
        'intro' => '通知通道，禁发营销信息，67字/条，免签名<br/><a href="http://cenwor.com/go.php?w=tg.shop.sms.qxt" target="_blank"><font color="red">点此在线购买</font></a>',
      ),
      'wnd' => 
      array (
        'name' => 'WN106通道',
        'intro' => '订单通知通道，禁发营销信息，70字单条，长短信67字条，须签名（签名联系天天微信客服：tttuangou 设置）<br/><a href="http://cenwor.com/go.php?w=tg.shop.sms.qxt" target="_blank"><font color="red">点此在线购买</font></a>',
      ),
      'zt' => 
      array (
        'name' => 'ZT106通道',
        'intro' => '<font color="red">【推荐】</font>可点对点下发，需做免审核备案<br>禁发抽奖、营销类信息，包括签名在内单条70个字，长短信每条67字（签名接口设置页自行设置，推荐用站点名称）<br/><a href="http://cenwor.com/go.php?w=tg.shop.sms.qxt" target="_blank"><font color="red">点此在线购买</font></a>',
      ),
      'ums' => 
      array (
        'name' => 'ZJ165通道',
        'intro' => '<font color="red">【备用】</font>目前暂不支持开通',
      ),
      'tyx' => 
      array (
        'name' => 'TP106通道（新）',
        'intro' => '<font color="red">【推荐】</font>特服号码更短、下发速度更快（通常仅几秒），不支持群发<br>禁发营销、抽奖类短信，包括签名在内单条70个字，长短信每条67字（签名接口设置页自行设置，推荐用站点名称）<br/><a href="http://cenwor.com/go.php?w=tg.shop.sms.qxt" target="_blank"><font color="red">点此在线购买</font></a>',
      ),
      'cz' => 
      array (
        'name' => 'CZ106通道（新）',
        'intro' => '<font color="red">【推荐】</font>特服号码更短、下发速度更快（通常仅几秒），不支持群发<br>禁发营销、抽奖类短信，包括签名在内单条70个字，长短信每条67字（签名接口设置页自行设置，推荐用站点名称）<br/><a href="http://cenwor.com/go.php?w=tg.shop.sms.qxt" target="_blank"><font color="red">点此在线购买</font></a>',
      ),
      'submail' => 
      array (
        'name' => '赛邮云通道',
        'intro' => '<font color="red">【推荐】</font>速度快，价格便宜，性价比高<br>禁发营销、抽奖类短信，包括签名在内单条70个字，长短信每条67字（签名接口设置页自行设置，推荐用站点名称）<br/><a href="https://www.mysubmail.com/chs/store" target="_blank"><font color="red">点此在线购买</font></a>',
      ),
    ),
    'autoERSend' => true,
    'fastsend' => false,
  ),
  'push' => 
  array (
    'mthread' => false,
  )
);
?>