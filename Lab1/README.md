# Lab1

## Erfahrung
Bei der Aufgabe habe ich mich gut ausgekannt da es sehr viel Dokumentation zu ARM Templates.

https://docs.microsoft.com/en-us/azure/azure-resource-manager/templates/template-tutorial-add-parameters?tabs=azure-cli
Diese Seite habe ich benutz um mir einen Überblick über die Template Optionen zu bekommen.

Danach habe ich mir einen Storage Account über das Azure Portal eingerichtet und dann das dazugehörige Template heruntergeladen.
Das selbe habe ich dann für die Web App gemacht.
Zu guter letzt habe ich beide Templates und die beiden Parameter Files zusammengeführt.

## Verwendung 
Zur Verwendung einfach in der Azure Cli:

templateFile="{path-to-the-template-file}"
devParameterFile="{path-to-azuredeploy.parameters.dev.json}"

az deployment group create \
  --name devenvironment \
  --resource-group myResourceGroup \
  --template-file $templateFile \
  --parameters $devParameterFile
