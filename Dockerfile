FROM php

WORKDIR /aviawiki

COPY . .

CMD ["php", "public/index.php"]