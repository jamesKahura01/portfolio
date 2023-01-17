import React from 'react';

import classes from './PageBackground.module.scss';
import home from 'assets/img/pages/home.webp';
import works from 'assets/img/pages/works.webp';
import about from 'assets/img/pages/about.webp';
import contacts from 'assets/img/pages/contacts.webp';

const PageBackground = ({ id }) => {

  switch(id) {
    case 'home':
  
      return (
        <img
          src={home}
          alt={id}
          className={classes.page}
        />
      );

    case 'works':

      return (
        <img
          src={works}
          alt={id}
          className={classes.page}
        />
      );

    case 'about':
  
      return (
        <img
          src={about}
          alt={id}
          className={classes.page}
        />
      );

    case 'contacts':

      return (
        <img
          src={contacts}
          alt={id}
          className={classes.page}
        />
      );

    default:
      return null;
  }
};

export default PageBackground;
