[Home](index.php) | [Webchat](iris/) | [Rules](rules.php) | Modes and Extbans | [Services](services.php) | [Servers](servers.php)

#Spigot IRC Modes and Extbans

##Channel Permission Modes
Note: To automatically grant someone a permission mode when they join the channel, you should use [ChanServ](services.php).

| Mode | Char | Arguments | Description |
| ---- | ---- | --------- | ----------- |
| q | ~ | nick | Grants a user channel founder (owner) status. |
| a | & | nick | Grants a user channel admin (protected) status. |
| o | @ | nick | Grants a user channel operator status. |
| h | % | nick | Grants a user channel half-operator status. |
| v | + | nick | Grants a user channel voice status.  This allows them to speak even when channel mode +m is set. |
| b | | nick!user@host | Bans users matching the specified mask from joining the channel. |
| e | | nick!user@host | Allows users matching the specified mask to join the channel, even if there is a matching ban set. |
| I | | nick!user@host | Allows users matching the specified mask to join the channel without an invitation when channel mode +i is set. |

##Channel Modes

| Mode | Arguments | Description |
| ---- | --------- | ----------- |
| A | | Allows anyone in the channel to invite other users to the channel. |
| C | | Blocks CTCPs to the channel (except ACTION). |
| c | | Block messages and channel notices containing color or formatting codes. (Also see channel mode +S) |
| D | | Delays showing join messages until a user speaks in the channel. |
| d | seconds | Prevents a user from speaking in a channel until the specified amount of seconds has passed. |
| f | [*]messages:seconds | Kicks a user if they exceed a certain amount of messages in the specified time frame.  Bans the user if * is present. |
| g | keyword | Blocks messages with the specified keyword.  Wildcards (*) can be used here, but must also surround the keyword as well when being used. |
| H | messages:seconds | Replays the most recent messages sent within the specified time frame to users who join the channel. |
| i | | Users cannot join the channel without being invited or having a matching invite exception (channel mode +I). |
| J | seconds | Prevents a user from rejoining the channel for the specified time after being kicked. |
| j | joins:seconds | Enforces a limit on how many users can join the channel in the specified time frame. |
| k | password | Requires the specified password to join the channel. |
| L | channel | Forwards users to the specified channel once the limit (channel mode +l) is reached. |
| l | limit | Limits the channel to the specified amount of users. |
| M | | Only allows users registered with services to speak in the channel. |
| m | | Only allows users with voice or higher permission to speak in the channel. |
| N | | Prevents users in the channel from changing their nickname. |
| n | | Blocks messages sent to the channel from users who are not in the channel. |
| p | | Marks a channel as private, preventing it from being shown in the network channel list. |
| R | | Only allows users registered with services to join the channel. |
| S | | Strips colors and formatting codes from messages and channel notices. (Also see channel mode +c) |
| s | | Marks a channel as secret, preventing it from being shown in the network channel list and users' WHOIS. |
| T | | Blocks channel notices. |
| t | | Requires a user to have half-op or higher permission to change the channel topic. |
| X | restriction:mode | Allows users with the specified mode or higher (q, a, o, h, or v) to bypass the specified restriction (topiclock, blockcolor, filter, flood, noctcp, nonotice, regmoderated, or stripcolor). |

##Matching Extbans
Matching extended bans can be used with channel modes +b, +e, and +I in place of the normal nick!user@host argument.  

| Extban | Description |
| ------ | ----------- |
| r:realname | Matches users with the specified real name (gecos). Can also be used with channel mode +I. |
| R:account | Matches a specified services account. (Note: A services account name can be different from the user's nickname.) Can also be used with channel mode +I. |

##Acting Extbans
Acting extended bans can be used with channel modes +b and +e as a prefix to the nick!user@host argument.  Descriptions assume that the extban is being used as a ban (channel mode +b), which will prevent the specified user from performing an action.  When extbans are used in a ban exception (channel mode +e), they allow the specified user to perform an action or bypass a restriction.

| Extban | Description |
| ------ | ----------- |
| A: | Prevents the specified user from inviting other users to the channel. |
| c: | Blocks messages containing color or control codes from the specified user. |
| C: | Blocks CTCPs to the channel from the specified user (except ACTION). |
| m: | Prevents the specified user from speaking in the channel. |
| N: | Prevents the specified user from changing their nickname while in the channel. |
| S: | Strips color and control codes from the specified user's messages. |
| T: | Blocks channel notices from the specified user. |

##User Modes
| Mode | Description |
| ---- | ----------- |
| B | Marks the user as a bot. All bots should automatically set this mode on themselves when joining the network. |
| c | Only allows private messages from users who are in channels that you are in. |
| d | Prevents the user from receiving any messages or notices. |
| g | Blocks private messages from people who are not on your /accept whitelist.  If someone who is not on your whitelist tries to PM you, you will receive a notification with their name, and they will be informed that their message was blocked. |
| I | Hides all channels from a user's WHOIS output. |
| i | User can only be seen in /who by network operators. |
| o | User is a network operator. |
| R | Only allows private messages from users who are registered with services. |
| S | Strips color and control codes from all messages and notices sent to the user. |
| x | Masks your hostname, preventing other users from seeing your real IP address. |
