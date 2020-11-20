# Lab4

## Erstellungsschritte

1. Zuerst wurde eien azure-deploy.yaml Datei erstellt. Das ist die Kubernetes Manifest Datei.

2. In dieser Datei wurden dann die Container Images aus dem letzten Lab angegeben und eingestellt.

3. Danach wurde ein Kubernetes Cluster erstellt mit dem Command: az aks create --resource-group fhwn20 --name kubernetes --node-count 1 --enable-addons monitoring --generate-ssh-keys

4. Zuletzt wurde noch deployed mit dem Befehl: kubectl apply -f azure-deploy.yaml 


## URL

40.67.250.7

Die Seite funktioniert wegen einen unbekannten Fehler nicht.

## Screenshot

![Cluster](cluster.png)