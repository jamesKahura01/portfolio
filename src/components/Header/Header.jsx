import React from 'react';

import Logo from 'components/Logo/Logo';
import Navigation from 'components/Navigation/Navigation';
import BurgerMenuButton from 'components/BurgerMenuButton/BurgerMenuButton';

import styles from './Header.module.scss';

const Header = () => {  
  return (
    <header className={styles.header}>
      <div className='container'>
        <div className={styles.header__inner}>
          <Logo />
          <Navigation />
          <BurgerMenuButton />
        </div>
      </div>
    </header>
  );
};

export default Header;
