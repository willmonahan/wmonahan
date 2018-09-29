const debug = require('debug')('app');
const express = require('express');
const path = require('path');
const hbs = require('express-handlebars');
const compression = require('compression');
const port = process.env.PORT;

const app = express();
app.use(compression());

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'hbs');
app.engine('hbs', hbs({
    extname: '.hbs',
    defaultLayout: 'main',
    layoutsDir: path.join(__dirname, 'views/layouts'),
    partialsDir: path.join(__dirname, 'views/partials')
}));

app.use('/static', express.static(path.join(__dirname, 'static'))); // serve my static assets
app.use('/static', express.static(path.join(__dirname, 'node_modules/bootstrap/dist'))); // serve bootstrap static assets
app.use('/static', express.static(path.join(__dirname, 'node_modules/jquery/dist'))); // serve jquery static assets
app.use('/static', express.static(path.join(__dirname, 'node_modules/@fortawesome/fontawesome-free'))); // serve fontawesome static assets

app.get('/', (req, res) => {
    res.render('pages/home', { activeLink: 'home', title: 'Will Monahan' });
});

app.get('/resume', (req, res) => {
    res.render('pages/resume', {activeLink: 'resume', title: 'Will Monahan - Resume'});
});

app.listen(port, () => {
    debug(`listening on port ${port}`);
});