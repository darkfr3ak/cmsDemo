<?php

/*
 * Copyright (C) 2014 darkfr3ak <info at darkfr3ak.de>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/**
 * Description of Logo
 *
 * @author darkfr3ak <info at darkfr3ak.de>
 */
class TwitterWidget extends Widget {

    function display() {

        require 'settings.inc.php';

        # Load Twitter class
        require_once('contrib/twitteroauth/TwitterOAuth.php');

        # Create the connection
        $twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

        # Migrate over to SSL/TLS
        $twitter->ssl_verifypeer = true;

        # Load the Tweets
        $tweets = $twitter->get('statuses/user_timeline', array('screen_name' => TWITTER_USERNAME, 'exclude_replies' => 'true', 'include_rts' => 'false', 'count' => TWEET_LIMIT));

        # Example output
        if (!empty($tweets)) {
            foreach ($tweets as $tweet) {

                # Access as an object
                $tweetText = $tweet['text'];

                # Make links active
                $tweetText = preg_replace("#(http://|(www\.))(([^\s<]{4,68})[^\s<]*)#", '<a href="http://$2$3" target="_blank">$1$2$4</a>', $tweetText);

                # Linkify user mentions
                $tweetText = preg_replace("/@(w+)/", '<a href="http://www.twitter.com/$1" target="_blank">@$1</a>', $tweetText);

                # Linkify tags
                $tweetText = preg_replace("/#(w+)/", '<a href="http://search.twitter.com/search?q=$1" target="_blank">#$1</a>', $tweetText);

                # Output
                echo '<div>' . $tweetText . '</div><hr>';
            }
        }
    }

}
