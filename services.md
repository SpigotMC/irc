[Home](index.php) | [Webchat](iris/) | [Rules](rules.php) | [Modes and Extbans](modes.php) | Services | [Servers](servers.php)

#Spigot IRC Services

The spi.gt network uses [Atheme](https://atheme.github.io/atheme.html) IRC services. Below is list of some useful commands. All commands should be sent to the specified services bot as a `PRIVMSG`. A full list of commands can be found in the [Atheme Documentation](https://github.com/atheme/atheme/wiki).

##<a name="cs"></a>ChanServ
ChanServ is responsible for maintaining control of a channel. You retain control of channels registered through ChanServ, even when you're offline.

| Command | Arguments | Description |
| ------- | --------- | ----------- |
| `REGISTER` | &lt;#channel&gt; | Registers a channel with ChanServ, granting protection and additional control. |
| `FLAGS` | &lt;#channel&gt; [target] [flag] | Allows one to modify flags on a user, e.g. granting someone automatic op (FLAGS #channel User AOP) when they join. ChanServ will apply these flags to users when they log in with their NickServ account. |
| `QUIET` | &lt;#channel&gt; &lt;target mask&gt; | Prevents anyone with the specified mask from talking in the channel if they aren't vocie (+) or higher. |
| `SET` | &lt;#channel&gt; &lt;setting&gt; &lt;parameter&gt; | Sets various flags on the channel. |
| `SET FOUNDER` | &lt;#channel&gt; FOUNDER &lt;nickname&gt; | Transfers ownership of the channel to another user. |
| `RECOVER` | &lt;#channel&gt; | Restores control of a channel if someone tries to take over. |

-----------------------------------------------------------------------------------------------
##<a name="ns"></a>NickServ 
NickServ allows you to register a nickname and maintain control of it. Your nickname will expire if you are offline for 30 days, and control of any channels you have registered will be given to a successor or dropped. By default, if you log in with a registered nickname and do not identify within 30 seconds, your nickname will be changed.

| Command | Arguments | Description |
| ------- | --------- | ----------- |
| `REGISTER` | &lt;password&gt; &lt;email&gt; | Registers your current nick with NickServ under a new account by the same name. You will be sent a confirmation email and must enter a verification command to complete registration. |
| `IDENTIFY` | [nickname] &lt;password&gt; | Identify yourself to NickServ with your nickname (optional if you are currently using it) and password. Generally this should be part of an automatically run command list in your client if it supports it. |
| `GHOST` | &lt;nickname&gt; [password] | Forcibly disconnects a user using a nickname registered to your account. If you are logged in to your account currently, you are not required to supply a password. |
| `GROUP` | | Registers your current nickname to your NickServ account (assuming you are logged in). |
| `UNGROUP` | [nickname] | Unregisters the current nickname from your NickServ account (unless specified). |
| `DROP` | &lt;name&gt; &lt;password&gt; | Unregisters your account and all nicknames and channels associated with it. |
