CREATE TABLE tweet(
	id_tweet int AUTO_INCREMENT,
	comment int,
	favorite int,
	tweet varchar(256),
	retweet int,
	CONSTRAINT tweet_pk PRIMARY KEY (id_tweet)
);

CREATE TABLE user(
	id int AUTO_INCREMENT,
	username varchar(128),
	password varchar(256),
	nama varchar(200),
	CONSTRAINT user_pk PRIMARY KEY (id)
);

INSERT INTO tweet (id_tweet,comment,favorite,tweet,retweet) VALUES('',2,3,'test',4);
INSERT INTO tweet (id_tweet,comment,favorite,tweet,retweet) VALUES('',0,0,'ih',1);
INSERT INTO user (id,username,password,nama) VALUES('','anisapratiwi09','swadi0909','anisa pratiwi');
	
	