FROM amazonlinux:2

RUN yum install -y glibc-langpack-ja && yum clean all && ln -sf /usr/share/zoneinfo/Japan /etc/localtime
RUN yum install -y \
    sudo shadow-utils procps openssl \
    tar zip unzip vim git wget curl \
    gcc make libaio libxml2 libxml2-devel libpng libpng-devel \
    && yum clean all

RUN yum install -y httpd httpd-devel logrotate && yum clean all
RUN systemctl enable httpd.service
EXPOSE 80
EXPOSE 443
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
