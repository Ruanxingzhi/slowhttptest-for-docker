#slow-web部署手册

[![Build Status](https://travis-ci.org/Ruanxingzhi/slowhttptest-for-docker.svg?branch=master)](https://travis-ci.org/Ruanxingzhi/slowhttptest-for-docker)


slow-web是一个基于Linux下`slowhttptest`的攻击工具，提供了网页界面方便管理。目前功能并不完善，我会进一步优化。  

首先，在daocloud.io上注册一个账号。

然后，按下图的方法，点进“创建”：
![创建应用](http://i2.buimg.com/567571/90fa8552a97ab76e.png)

然后搜索`slowhttptest`:
![搜索](http://i2.buimg.com/567571/bf926c638222f402.png)

在`ruanxingzhi`的镜像右边选择“部署”：
![部署](http://i2.buimg.com/567571/17e5ee66e4ce3ef8.png)

随意填写应用名称，给`2x`的计算资源。
![选择选项](http://i2.buimg.com/567571/d694d34959e22d7f.png)

等待部署完成，耗时大约3分钟。之后会有访问地址：
![地址](http://i4.buimg.com/567571/bab7792384030f1f.png)

然后进入对应的地址，开打。

**slowhttptest**的攻击效果很好，如果目标服务器是中小型网站，一般一台机器就能打垮。

如果感觉一个进程难以打垮，可以多攻击几次。

选项：
![启动](http://i2.buimg.com/567571/7c5069609c6e7ad8.png)
>**注意**：网址必须带有`http://`或者`https://`，否则攻击不会启动。

攻击报告：
![报告](http://i2.buimg.com/567571/3731ae824ee44671.png)

>**注意**：网址必须带有`http://`或者`https://`，否则攻击不会启动！
