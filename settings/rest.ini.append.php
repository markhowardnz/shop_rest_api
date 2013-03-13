<?php /* #?ini charset="utf-8"?

[ApiProvider]
ProviderClass[shop]=ShopProvider

[Authentication]
RequireAuthentication=enabled
AuthenticationStyle=ezpRestBasicAuthStyle
RequireHTTPS=disabled

[CacheSettings]
ApplicationCache=disabled

[Export]
WrongOrdersTimeDiff=3600

[Notifications]
Receivers[]
Receivers[]=dolgushev.serhey@gmail.com

[RouteSettings]
SkipFilter[]=ShopController_getProductStock

*/ ?>
