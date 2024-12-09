FROM ubuntu:22.04
RUN apt update && apt clean -y
ADD get-nginx.sh /bin/get-nginx.sh
RUN chmod +x /bin/get-nginx.sh
ENTRYPOINT ["/bin/get-nginx.sh"]

