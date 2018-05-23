
CREATE TABLE scriptures (
  scripture_id  SERIAL PRIMARY KEY,
  book  VARCHAR(45) NOT NULL UNIQUE,
  chapter   SMALLINT     NOT NULL,
  verse     SMALLINT     NOT NULL,
  content   TEXT         NOT NULL
);