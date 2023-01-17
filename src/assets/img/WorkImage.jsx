// The pictures size for the portfolio works is 800x490
import React from 'react';
import ImgStyles from './Img.module.scss';
import keepInTouch from './works/kit.webp';
import obliksoft from './works/obliksoft.webp';
import friendsApp from './works/friends_app.webp';
import memoryPairGame from './works/memory_game.webp';
import creativeBackery from './works/creative_bakery.webp';
import myBike from './works/mybike.webp';
import activeBox from './works/activebox.webp';
import frogger from './works/frogger.webp';
import jsDOM from './works/js_dom.webp';
import affiliate from './works/affiliate.webp';
import mockGoogle from './works/mock_google.webp';

const WorkImage = ({ id }) => {

  switch(id) {
    case 'Keep in touch':

    return (
      <img
        src={keepInTouch}
        alt={id}
        className={ImgStyles.work}
      />
    );

    case 'Mock Google Search':

    return (
      <img
        src={mockGoogle}
        alt={id}
        className={ImgStyles.work}
      />
    );

    case 'OblikSoft testing':

    return (
      <img
        src={obliksoft}
        alt={id}
        className={ImgStyles.work}
      />
    );

    case 'Friends app':

      return (
        <img
          src={friendsApp}
          alt={id}
          className={ImgStyles.work}
        />
      );

    case 'Memory pair game':

      return (
        <img
          src={memoryPairGame}
          alt={id}
          className={ImgStyles.work}
        />
      );

    case 'Affiliate':

      return (
        <img
          src={affiliate}
          alt={id}
          className={ImgStyles.work}
        />
      );

    case 'CreativeBakery':

      return (
        <img
          src={creativeBackery}
          alt={id}
          className={ImgStyles.work}
        />
      );

    case 'MyBiKE':

      return (
        <img
          src={myBike}
          alt={id}
          className={ImgStyles.work}
        />
      );

    case 'ActiveBox':

      return (
        <img
          src={activeBox}
          alt={id}
          className={ImgStyles.work}
        />
      );

    case 'Frogger':

      return (
        <img
          src={frogger}
          alt={id}
          className={ImgStyles.work}
        />
      );

    case 'JS DOM':

      return (
        <img
          src={jsDOM}
          alt={id}
          className={ImgStyles.work}
        />
      );

    default:
      return null;
  }
};

export default WorkImage;
