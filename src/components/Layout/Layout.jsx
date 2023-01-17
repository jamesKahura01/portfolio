import React from "react";

import styles from "./Layout.module.scss";
import Footer from "components/Footer/Footer";
import Header from "components/Header/Header";

const Layout = ({ children }) => {
  return (
    <div className={styles.layout}>
      <Header />
      <main>
        {children}
      </main>
      <Footer />
    </div>
  );
};

export default Layout;
