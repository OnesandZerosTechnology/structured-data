<script type='application/ld+json'>
{
  	"@context": "http://www.schema.org",
  	"@type": "Organization",
  	"name": "$SiteConfig.Title",
    "url": "$absoluteBaseURL",
    "logo": "$SiteConfig.SDLogo.AbsoluteURL",
  	"contactPoint": {
    	"contactType": "$SiteConfig.SDContactType",
    	"telephone": "$SiteConfig.SDTelephone",
    	"email": "$SiteConfig.SDEmail",
    	"faxNumber": "$SiteConfig.SDFax"
	},
	"address": {
 		"@type": "PostalAddress",
 		"streetAddress": "$SiteConfig.SDStreetAddress",
 		"addressLocality": "$SiteConfig.SDAddressLocality",
 		"addressRegion": "$SiteConfig.SDAddressRegion",
 		"postalCode": "$SiteConfig.SDPostalCode",
 		"addressCountry": "$SiteConfig.SDAddressCountry"
 	}
}
</script>