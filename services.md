[Home](index.php) | [Webchat](iris/) | [Rules](rules.php) | [Modes and Extbans](modes.php) | Services | [Servers](servers.php)

#Spigot IRC Services

The spi.gt network uses [Atheme](http://atheme.net/atheme.html) IRC services. Below is a very incomplete list of useful commands. All commands should be send to the specified services bot as a `PRIVMSG`.

##<a name=cs></a>ChanServ
ChanServ is responsible for maintaining control of a channel. Channels registered with ChanServ will not be automatically deleted when nobody is in them.
### Most commands only work with registered channels
| Command | Arguments | Description |
| ------- | --------- | ----------- |
| `REGISTER` | <#channel> | Registers a channel with ChanServ, granting protection and additional control. |
| `FLAGS` | <#channel> [target] [flag] | Allows one to modify flags on a user, e.g. granting someone automatic op (FLAGS #channel User AOP) when they join. |
| `QUIET` | <#channel> <target mask> | Prevents anyone with the specified mask from talking in the channel if they aren't vocie (+) or higher. |
| `SET` | <#channel> <setting> <parameter> | Sets various flags on the channel. |
| `SET FOUNDER` | <#channel> FOUNDER <nick> | Subset of `SET` command. Used to transfer ownership of a channel. |
| `RECOVER` | <#channel> | Restores control of a channel if someone tries to take over.
-----------------------------------------------------------------------------------------------
##<a name=cs></a>NickServ 
NickServ allows you to register a nickname and maintain ownership of it. Your ownership will expire if you are inactive for too long.
### In order to benefit from ChanServ `FLAGS`, you must be registered and logged in with NickServ.
### If you log in with a registered username and do not identify within 30 seconds, your nick will be changed.
| Command | Arguments | Description |
| ------- | --------- | ----------- |
| `REGISTER` | <password> <email> | Registers your current nick with NickServ under a new account by the same name. You will be sent a confirmation email and must enter a verification command to complete registration. |
| `IDENTIFY` | <password> | Identifies using the password and your current username. Generally this should be part of an automatically run command list in your client if it supports it. |
| `GHOST` | <nick> [password] | Forcibly disconnects a user using a nickname registered to your account. If you are logged in to your account currently, you are not required to supply a password. |
| `GROUP` | | Registers your current nickname to your NickServ account (assuming you are logged in). |
| `DROP` | <name> <password> | Unregisters your account and all nicks associated with it. |
