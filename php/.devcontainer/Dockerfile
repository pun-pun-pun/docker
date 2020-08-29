FROM amazonlinux:2

RUN yum install -y glibc-langpack-ja && yum clean all && ln -sf /usr/share/zoneinfo/Japan /etc/localtime
RUN yum install -y \
    sudo shadow-utils tar zip unzip procps gcc make libaio libxml2 libxml2-devel libpng libpng-devel vim git wget \
    && yum clean all

ENV LANG="ja_JP.UTF-8" \
    LANGUAGE="ja_JP:ja" \
    LC_ALL="ja_JP.UTF-8"

RUN yum install -y httpd httpd-devel logrotate httpd-filesystem httpd-tools && yum clean all
RUN systemctl enable httpd.service
EXPOSE 80
EXPOSE 443
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]

RUN amazon-linux-extras install epel
RUN yum install -y \
    php php-devel php-pear php-pecl-memcache php-xml php-mbstring php-pdo php-mcrypt php-gd \
    && yum clean all

COPY amazonlinux.php.ini /etc/php.ini

ENV environment local
ENV NLS_LANG Japanese_Japan.AL32UTF8
