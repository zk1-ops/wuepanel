<?php

return [
    'location' => [
        'no_location_found' => 'Não foi possível localizar um registro correspondente ao código curto fornecido.',
        'ask_short' => 'Código curto do local',
        'ask_long' => 'Descrição do local',
        'created' => 'Um novo local foi criado com sucesso (:name) com uma identificação de :id.',
        'deleted' => 'O local solicitado foi excluído com sucesso.',
    ],
    'user' => [
        'search_users' => 'Insira um nome de usuário, ID de usuário ou endereço de e-mail',
        'select_search_user' => 'ID do usuário a ser excluído (Enter \'0\' Pesquisar)',
        'deleted' => 'Usuário excluído com sucesso do Painel.',
        'confirm_delete' => 'Tem certeza de que deseja excluir este usuário do Painel?',
        'no_users_found' => 'Nenhum usuário foi encontrado para o termo de pesquisa fornecido.',
        'multiple_found' => 'Várias contas foram encontradas para o usuário fornecido, não foi possível excluir um usuário devido ao --sinalizador sem interação.',
        'ask_admin' => 'Este usuário é um administrador?',
        'ask_email' => 'endereço de e-mail',
        'ask_username' => 'Nome Do Usuário',
        'ask_name_first' => 'Primeiro nome',
        'ask_name_last' => 'Último nome',
        'ask_password' => 'Senha',
        'ask_password_tip' => 'Se você quiser criar uma conta com uma senha aleatória enviada por e-mail ao usuário, execute novamente este comando (CTRL+C) e passe o sinalizador `--no-password`.',
        'ask_password_help' => 'As senhas devem ter pelo menos 8 caracteres e conter pelo menos uma letra maiúscula e um número.',
        '2fa_help_text' => [
            'Este comando desabilitará a autenticação de 2 fatores para um usuário\'s conta se estiver habilitada. Isso só deve ser usado como um comando de recuperação de conta se o usuário estiver bloqueado em sua conta.',
            'Se isso não é o que você queria fazer, pressione CTRL+C para sair deste processo.',
        ],
        '2fa_disabled' => 'A autenticação de 2 fatores foi desativada para :email.',
    ],
    'schedule' => [
        'output_line' => 'Envio de trabalho para a primeira tarefa em `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Excluindo arquivo de backup do serviço :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Reconstruir solicitação para ":name" (#:id) on node ":node" falhou com erro: :message',
        'reinstall' => [
            'failed' => 'Solicitação de reinstalação para ":name" (#:id) on node ":node" falhou com erro: :message',
            'confirm' => 'Você está prestes a reinstalar em um grupo de servidores. Você deseja continuar?',
        ],
        'power' => [
            'confirm' => 'Você está prestes a executar uma :action contra :count servers. Você deseja continuar?',
            'action_failed' => 'Solicitação de ação de energia para ":name" (#:id) on node ":node" falhou com erro: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (e.g. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Nome do Usuário',
            'ask_smtp_password' => 'SMTP Password',
            'ask_mailgun_domain' => 'Domínio da arma postal',
            'ask_mailgun_endpoint' => 'Ponto final da arma postal',
            'ask_mailgun_secret' => 'Segredo da Arma de Correio',
            'ask_mandrill_secret' => 'Segredo do Mandril',
            'ask_postmark_username' => 'Chave de API de carimbo postal',
            'ask_driver' => 'Qual driver deve ser usado para enviar e-mails?',
            'ask_mail_from' => 'Os e-mails de endereço de e-mail devem se originar de',
            'ask_mail_name' => 'Nome do qual os e-mails devem aparecer',
            'ask_encryption' => 'Método de criptografia a ser usado',
        ],
        'database' => [
            'host_warning' => 'É altamente recomendável não usar "localhost" como seu host de banco de dados, pois vimos problemas frequentes de conexão de soquete. Se você quiser usar uma conexão local, você deve usar "127.0.0.1".',
            'host' => 'Database Host',
            'port' => 'Database Port',
            'database' => 'Database Name',
            'username_warning' => 'Usar a conta "root" para conexões MySQL não é apenas altamente desaprovado, também não é permitido por este aplicativo. Vocês\'Você precisará ter criado um usuário MySQL para este software.',
            'username' => 'Database Nome do usuário',
            'password_defined' => 'Parece que você já tem uma senha de conexão MySQL definida, gostaria de alterá-la?',
            'password' => 'Database Password',
            'connection_error' => 'Não foi possível conectar ao servidor MySQL usando as credenciais fornecidas. O erro retornado foi ":error".',
            'creds_not_saved' => 'Suas credenciais de conexão NÃO foram salvas. Você precisará fornecer informações de conexão válidas antes de continuar.',
            'try_again' => 'Voltar e tentar novamente?',
        ],
        'app' => [
            'settings' => 'Ativar editor de configurações baseado em interface do usuário?',
            'author' => 'E-mail do autor do ovo',
            'author_help' => 'Forneça o endereço de e-mail de onde os ovos exportados por este Painel devem ser. Este deve ser um endereço de e-mail válido.',
            'app_url_help' => 'A URL do aplicativo DEVE começar com https:// ou http://, dependendo se você estiver usando SSL ou não. Se você não incluir o esquema, seus e-mails e outros conteúdos serão vinculados ao local errado.',
            'app_url' => 'URL do aplicativo',
            'timezone_help' => 'O fuso horário deve corresponder a um dos fusos horários suportados pelo PHP. Se não tiver certeza, consulte http://php.net/manual/en/timezones.php.',
            'timezone' => 'Fuso horário do aplicativo',
            'cache_driver' => 'Driver de cache',
            'session_driver' => 'Driver de sessão',
            'queue_driver' => 'Driver de fila',
            'using_redis' => 'Vocês\'Se você tiver selecionado o driver Redis para uma ou mais opções, forneça informações de conexão válidas abaixo. Na maioria dos casos, você pode usar os padrões fornecidos, a menos que tenha modificado sua configuração.',
            'redis_host' => 'Redis Host',
            'redis_password' => 'Redis Password',
            'redis_pass_help' => 'Por padrão, uma instância do servidor Redis não tem senha, pois está sendo executada localmente e inacessível ao mundo exterior. Se este for o caso, basta pressionar enter sem inserir um valor.',
            'redis_port' => 'Redis Port',
            'redis_pass_defined' => 'Parece que uma senha já está definida para o Redis, você gostaria de alterá-la?',
        ],
    ],
];
