#slow-web

[![Build Status](https://travis-ci.org/Ruanxingzhi/slowhttptest-for-docker.svg?branch=master)](https://travis-ci.org/Ruanxingzhi/slowhttptest-for-docker)

slow-web是一个基于Linux下 [slowhttptest](https://github.com/shekyan/slowhttptest) 的攻击工具。提供了网页端用于管理。

Demo: http://slow.daoapp.io/

## 部署

**服务器上部署**

---

1. 拉取镜像：
```bash
docker pull ruanxingzhi/slowhttptest
```

2. 部署到本机`8765`端口：
```bash
docker run -dit -p 8765:80 --name slowweb ruanxingzhi/slowhttptest
```

于是容器`slowweb`开始运行。您可以把`8765`改成任何自己想要的端口。

**Daocloud上部署**

---

1. 访问[本项目地址](https://dashboard.daocloud.io/packages/6de4a584-11fa-4a6a-98d5-0b65682ee168)
2. 点击`部署`即可。

## 使用
填写URL和攻击时长，点击`动手`即可。  
您也可以填写代理。

特别地，您可以通过命令行使用：
```
curl http://slow.daoapp.io/once.php?url=www.example.com&time=60
```

## 注意事项
这个轮子对输入没有任何过滤，**有注入漏洞**。  
因为slow-web运行于docker上，所以如果攻击器被破坏，宿主机不会有问题。

另外，由于攻击报告使用了Google图表，所以查看报告需要翻墙 233

## TODO
- 做好连续攻击功能：不停地攻击，直到关机为止。（或者，直到取消为止。）
- 完善界面，下个版本尝试[Flat UI](https://github.com/designmodo/Flat-UI)
- 增加安全性
- 提供更完善的API

## 致谢
slow-web使用了[Daemonite's material UI](https://github.com/Daemonite/material).

![启动](http://p1.bqimg.com/567571/e4a83c3b83418347.png)
![进行中](http://p1.bqimg.com/567571/1042553c0c43c9b2.png)
![报告](http://p1.bpimg.com/4851/28a2705532875326.png)
