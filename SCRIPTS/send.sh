#  _______  _____  ___  ___      ___  ______    __        
# /"     "|(\"   \|"  \|"  \    /"  |/    " \  |" \       
#(: ______)|.\\   \    |\   \  //  /// ____  \ ||  |      
# \/    |  |: \.   \\  | \\  \/. .//  /    ) :)|:  |      
# // ___)_ |.  \    \. |  \.    //(: (____/ // |.  |      
#(:      "||    \    \ |   \\   /  \        /  /\  |\     
# \_______) \___|\____\)    \__/    \"_____/  (__\_|_)    
                                                         
                                                         
echo "INFO : Lancement du script d'envoi...";

read -p "Entrez les modification apportées au code: " MESSAGE;

while [ -z "$MESSAGE" ]; do
    echo "ERREUR : Le message de commit ne peut pas être vide.";
    read -p "RE-Entrez les modification apportées au code: " MESSAGE;
done

#Github
git add .;
git commit -m "$MESSAGE";
git push origin main;

echo "INFO : Fin du script d'envoi.";

