FROM fearintino/docker-php

ARG user
ARG project_path
ENV PROJECT_DIR $project_path
RUN adduser -D $user
USER $user
WORKDIR $project_path

RUN composer global require "hirak/prestissimo:^0.3"