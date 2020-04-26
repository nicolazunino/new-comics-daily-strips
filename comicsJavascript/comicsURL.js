// eslint-disable-next-line no-unused-vars
function garfieldStripURL() {
  const todaysDate = new Date();
  const todaysYear = todaysDate.getYear() + 1900;
  const dateForURL = (todaysYear - 2000)
          + (`0${todaysDate.getMonth() + 1}`).slice(-2)
          + (`0${todaysDate.getDate()}`).slice(-2);

  return `http://strips.garfield.com/iimages1200/${todaysYear}/ga${dateForURL}.gif`;
}

function johnhartstudiosSource(comic, shortComic) {
  const monthNames = ['january', 'february', 'march', 'april', 'may', 'june',
    'july', 'august', 'september', 'october', 'november', 'december'];

  const todaysDate = new Date();
  const todaysYear = todaysDate.getYear() + 1900;
  const todaysMonth = monthNames[todaysDate.getMonth()];
  let dateForURL;
  if (todaysDate.getDay() === 0) {
    dateForURL = `${todaysYear - 2000}_${(`0${todaysDate.getMonth() + 1}`).slice(-2)
    }${(`0${todaysDate.getDate()}`).slice(-2)}s`;
  } else {
    dateForURL = `${(`0${todaysDate.getMonth() + 1}`).slice(-2)}${(`0${todaysDate.getDate()}`).slice(-2)}${todaysYear - 2000}d`;
  }

  return `https://johnhartstudios.com/${comic}strips/${todaysYear}/${todaysMonth}/${shortComic}${dateForURL}c.jpg`;
}

// eslint-disable-next-line no-unused-vars
function bcStripURL() {
  return johnhartstudiosSource('ac', 'ac');
}

// eslint-disable-next-line no-unused-vars
function wizardOfIdStripURL() {
  return johnhartstudiosSource('wizardofid', 'wiz1');
}
