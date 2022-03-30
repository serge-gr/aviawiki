FROM php

WORKDIR /app/public

COPY . .

CMD ["php", "index.php"]