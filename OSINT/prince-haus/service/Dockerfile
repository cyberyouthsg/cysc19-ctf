FROM ubuntu

RUN apt-get update && apt-get install bind9 bind9utils dnsutils -y
COPY bind/zones/db.malwa.re.local /etc/bind/zones/db.malwa.re.local
COPY bind/named.conf.local /etc/bind/named.conf.local
COPY bind/named.conf.options /etc/bind/named.conf.options

COPY entrypoint.sh /entrypoint.sh
RUN chmod 766 /entrypoint.sh
ENTRYPOINT [ "/entrypoint.sh" ]

CMD ["/sbin/named"]
