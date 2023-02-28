FROM node:18.7.0

WORKDIR /var/www/hmtl
COPY package.json package.json
COPY package-lock.json package-lock.json

RUN npm install

COPY . .

CMD [ "node", "storage/bot/app.js"]