import React from "react";

import styles from "./Contact.module.scss";

const compileLinkPath = (name, link) => {
  switch (name) {
    case "call me":
      return `tel:${link}`;

    case "send mail":
      return `mailto:${link}`;

    default:
      return link;
  }
};

const Contact = ({ contact }) => {
  const linkName = contact.linkName;
  const linkInfo = contact.info;
  const compiledLink = compileLinkPath(linkName, linkInfo);
  const targetBlank =
    contact.name !== "call me" && contact.name !== "send mail";

  return (
    <div className={styles.contact}>
      <div className={styles.contact__info}>
        <img
          src={contact.icon}
          alt={contact.name}
          className={styles.contact__icon}
        />

        <span>{linkInfo}</span>
      </div>

      <a
        href={compiledLink}
        className={styles.contact__link}
        target={targetBlank ? `_blank` : ``}
      >
        {linkName}
      </a>
    </div>
  );
};

export default Contact;
